<?php

namespace IFppo\TechniqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IFppo\CommerceBundle\Entity\FacturationCommande;
use IFppo\TechniqueBundle\Entity\StatsTechnique;

/**
 * Description of MajStatsTechnique
 *
 * @author jeremy.denieul
 */
class MajStatsTechniqueController extends Controller {

    public function indexAction() {

        set_time_limit(0);
        ini_set('memory_limit', '-1');
        // Connexion sur la base de données MYSQL de l'intranet 1
        $em = $this->getDoctrine()->getManager('default');

        // Connexion à la base de données MYSQL du srv-intranet2
        $emIntranet2 = $this->getDoctrine()->getManager('mySql2');

        //Connexion à CHACAL //
        $emChacal = $this->getDoctrine()->getManager('chacalStat');
        $entitiesChacal = $emChacal->getRepository('IFppoCommerceBundle:StatsChacal');
        
        $entityConfirm = $em->getRepository('IFppoCommerceBundle:ConfirmationCommande');

        // Se baser sur la table facturation commande                
        $listeFacture = $em->getRepository('IFppoCommerceBundle:FacturationCommande');

        $qb = $listeFacture->createQueryBuilder('f')
                ->where('f.dateFactureInversee LIKE :recupAnnee')
                ->setParameter('recupAnnee', '%2013-12%');
        $query = $qb->getQuery();
        $listeFactureResult = $query->getResult();

        //$statsTechnique = $emIntranet2->getRepository('IFppoTechniqueBundle:StatsTechnique');
        $recupRemise = $emIntranet2->getRepository('IFppoCommerceBundle:Commercestats');
        $matMod = $em->getRepository('IFppoTechniqueBundle:TarifMatMod');


        // Parcours de tout les tuples de la table facturation_commande
        foreach ($listeFactureResult as $key => $facturationCommande) {

            // Récupération de la date            
            $formateDate = explode("-", $facturationCommande->getDateFactureInversee());
            //$recupDateFacture->setDate($formateDate[0], $formateDate[1], $formateDate[2]);
            $recupDateFacture = $formateDate[0] . '-' . $formateDate[1] . '-' . $formateDate[2];

            // Récupération de tout les tuples d'une facturation groupé par identifiant de poste          
            $qb = $entityConfirm->createQueryBuilder('c')
                    ->where('c.numeroCommande = :numCommande')
                    ->setParameter('numCommande', $facturationCommande->getNumeroCommande())
                    ->groupBy('c.idPoste');

            $query = $qb->getQuery();
            $listeConfirmation = $query->getResult();

            $qb = $recupRemise->createQueryBuilder('c')
                    ->select('c.remise')
                    ->where('c.idclient = :idClient')
                    ->setParameter('idClient', $facturationCommande->getNumeroClient());
            $query = $qb->getQuery();
            $resultRemise = $query->getOneOrNullResult();

            // Parcours de tout les tuples de la table confirmation_commande correspondant à un numéro de commande 
            // et groupé par numéro de poste
            for ($index1 = 0; $index1 < count($listeConfirmation); $index1++) {

                // Ne pas prendre en comptes les divers
                if ($listeConfirmation[$index1]->getIdPoste() != 32767) {

                    // Récupération de tout les tuples d'une confirmation_commande 
                    // correspondant à un poste et un numéro de commande
                    $qb = $entityConfirm->createQueryBuilder('c')
                            ->where('c.numeroCommande = :numCommande')
                            ->setParameter('numCommande', $facturationCommande->getNumeroCommande())
                            ->andWhere('c.idPoste = :idPoste')
                            ->setParameter('idPoste', $listeConfirmation[$index1]->getIdPoste());
                    $query = $qb->getQuery();
                    $resultConfirmPoste = $query->getResult();

                    // S'il y a des résultats
                    if ($resultConfirmPoste != null) {

                        // Pour chaque confirmation de commande
                        $cumulTypeChassis = "";
                        $cumulDimensionsClients = "";
                        $cumulCouleur = "";
                        $cumulQuantite = 0;
                        $cumulRemplissage = "";

                        // Récupération de tout les tuples d'une confirmation_commande correspondant à un poste
                        // foreach au cas où où il y ai plusieurs postes identiques pour une commande (ex: divers, poste
                        // 32767)
                        foreach ($resultConfirmPoste as $key => $valueConfirm) {
                            $cumulRemplissage = $this->concatColonneCommande($valueConfirm->getRemplissage(), $key, $cumulRemplissage);
                            $cumulTypeChassis = $this->concatColonneCommande($valueConfirm->getTypeChassis(), $key, $cumulTypeChassis);
                            $cumulDimensionsClients = $this->concatColonneCommande($valueConfirm->getDimensionsClient(), $key, $cumulDimensionsClients);
                            $cumulCouleur = $this->concatColonneCommande($valueConfirm->getCouleur(), $key, $cumulCouleur);
                            $cumulQuantite = $this->cumulQuantite($valueConfirm->getQuantitePoste(), $cumulQuantite);
                        }

                        // $ajoutStatTechnique = $statsTechnique->findOneBy(array('numCommande' => $value['numeroClient']));
                        // Création de l'objet pour ajout du tuple dans la bdd
                        $ajoutStatTechnique = new StatsTechnique();
                        $ajoutStatTechnique->setDateFacture($recupDateFacture);
                        $ajoutStatTechnique->setNomClient($listeConfirmation[$index1]->getNomClient());
                        $ajoutStatTechnique->setPoste($listeConfirmation[$index1]->getNumeroPoste());
                        $ajoutStatTechnique->setNumeroCommande($listeConfirmation[$index1]->getNumeroCommande());
                        $ajoutStatTechnique->setQuantite($cumulQuantite);
                        $ajoutStatTechnique->setTypeChassis($cumulTypeChassis);
                        $ajoutStatTechnique->setCouleur($cumulCouleur);
                        $ajoutStatTechnique->setDimensions($cumulDimensionsClients);
                        $ajoutStatTechnique->setRemplissage($cumulRemplissage);

                        // Récupère la forme dans chacal                    
                        $recupChacal = $entitiesChacal->findOneBy(array('ptrIdProjet' => $listeConfirmation[$index1]->getIdCommande(), 'idElevation' => $listeConfirmation[$index1]->getIdPoste()));
                        // Définit genre & catégorie
                        if ($recupChacal != NULL) {
                            // Récupère le genre
                            if ($recupChacal->getOForme() != 1) {
                                $ajoutStatTechnique->setGenre("Multiforme");
                            } else {
                                $ajoutStatTechnique->setGenre("Rectangulaire");
                            }

                            switch ($recupChacal->getPtrIdGamme()) {
                                // PVC Réhau
                                case 1048577:
                                    $ajoutStatTechnique->setCategorie("PVC Réhau");
                                    break;
                                //Alu
                                case 1048579:
                                    $ajoutStatTechnique->setCategorie("Alu");

                                    break;
                                //PVC Socdredis
                                case 1048578:
                                    $ajoutStatTechnique->setCategorie("PVC Socredis");
                                    break;
                                default:
                                    goto pasAjout;                                    
                                    break;
                            }
                        } else {                            
                            if ($listeConfirmation[$index1]->getIdPoste() == '9005') {
                                $ajoutStatTechnique->setCategorie("Futurol");
                                $ajoutStatTechnique->setGenre("Futurol");
                                goto pasAjout;
                            } else {
                                $ajoutStatTechnique->setCategorie("Opération commerciale");
                                $ajoutStatTechnique->setGenre("Opération commerciale");
                                goto pasAjout;
                            }
                        }

                        // Récupération de la remise du client

                        $ajoutStatTechnique->setRemise($resultRemise['remise']);
                       
                        // Récupère le tuple dans la table tarif_mat_mod correspondant à un numéro de commande
                        // et à un poste , groupé par poste     
                        $qbMatMod = $matMod->createQueryBuilder('s')
                                ->select('SUM(s.matMod) as matMod, s.refPoste')
                                ->where('s.numeroCommande = :numCom')
                                ->setParameter('numCom', $listeConfirmation[$index1]->getNumeroCommande())
                                ->andWhere('s.idPoste = :refPoste')
                                ->setParameter('refPoste', $listeConfirmation[$index1]->getIdPoste())
                                ->groupBy('s.idPoste');
                        // Récupération des résultats
                        $queryMatMod = $qbMatMod->getQuery();
                        $resultMatMod = $queryMatMod->getOneOrNullResult();
                        $listeMatModOptions = $matMod->findBy(array('numeroCommande' => $listeConfirmation[$index1]->getNumeroCommande(), 'idPoste' => $listeConfirmation[$index1]->getIdPoste()));
                        $cumulOptions = '';
                        // Récupération des options (concaténation pour mettre sur une ligne)                                
                        for ($index = 0; $index < count($listeMatModOptions); $index++) {
                            // Cumul des options                        
                            $cumulOptions = $this->concatColonneCommande($listeMatModOptions[$index]->getNomPlusValue(), $index, $cumulOptions);
                        }

                        // S'il y a un résultat dans la table matMod correspondant au poste et
                        // au numéro de commande
                        if ($resultMatMod != NULL) {
                            // Rempli les données récupérées grâce à la table tarif_mat_mod
                            $ajoutStatTechnique->setOptions($cumulOptions);
                           
                        } else {
                            $ajoutStatTechnique->setOptions($cumulOptions);
                            $ajoutStatTechnique->setMatModU(0);
                            $ajoutStatTechnique->setRapport(0);
                            $ajoutStatTechnique->setPrixSaisiUni(0);
                            $ajoutStatTechnique->setTarifUnitaire(0);
                            $ajoutStatTechnique->setTarifUnitaireRem(0);
                        }

                        $emIntranet2->persist($ajoutStatTechnique);
                    } // fin du if result != null
                    $emIntranet2->flush();
                    pasAjout:
                }
            } // fin du for sur la liste de confirmation de commande                        
        }
        //   return $this->render('IFppoTechniqueBundle:Stats:statsMatMod.html.twig');
    }

    /**
     * Fonction qui concatène toutes les valeurs des colonnes et retourne une chaine
     * @param type $valueColumn
     * @param type $index
     */
    public function concatColonneCommande($valueColumn, $index, $cumulOptionsRecu) {

        
        $cumulOptions = "";
        // Si c'est la première valeur
        if ($index == 0) {
            // S'il n'est pas vide
            if (trim($valueColumn) != "") {
                $cumulOptions = $valueColumn;
            }
        } // Index > 0
        else {
            // Si la valeur reçu n'est pas vide
            if (trim($valueColumn) != "") {
                // Si le cumul d'options reçu n'est pas vide
                if (trim($cumulOptionsRecu) != "") {
                    // Ajout de la nouvelle valeur à la suite, séparé par une virgule
                    $cumulOptions = $cumulOptionsRecu . ' , ' . $valueColumn;
                } else {
                    // Cumul d'options reçu vide, donc le cumul est égal à la nouvelle valeur                    
                    $cumulOptions = $valueColumn;
                }
            } else {
                $cumulOptions = $cumulOptionsRecu;
            }
        }
        return $cumulOptions;
    }

    /**
     * Cumul de la quantité 
     * @param type $quantite
     * @return type
     */
    public function cumulQuantite($quantite, $cumulQuantite) {

        return $cumul = $cumulQuantite + $quantite;
    }

}

?>
