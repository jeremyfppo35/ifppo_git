<?php

namespace IFppo\TechniqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of MajMatModController
 *
 * @author jeremy.denieul
 */
class MajMatModController extends Controller {

    public function indexAction() {

        set_time_limit(0);
        ini_set('memory_limit', '-1');

        // Connexion sur la base de données MYSQL
        $em = $this->getDoctrine()->getManager('default');
        $entityConfirm = $em->getRepository('IFppoCommerceBundle:ConfirmationCommande');

        // Connexion à la base de données MYSQL du srv-intranet2
        $emIntranet2 = $this->getDoctrine()->getManager('mySql2');
        $statsTechnique = $emIntranet2->getRepository('IFppoTechniqueBundle:StatsTechnique');

        //Connexion à CHACAL //
        $emChacal = $this->getDoctrine()->getManager('chacalStat');
        $entitiesChacal = $emChacal->getRepository('IFppoTechniqueBundle:StatsMatModParPoste');        

        // Récupère toutes les commandes de la table statstechnique
        $listeCommandes = $statsTechnique->findAll();


        for ($index = 0; $index < count($listeCommandes); $index++) {

            // Retrouve la commande correspondant à un identifiant de commande et à un numéro de poste
            $idPosteCommande = $entityConfirm->findBy(array('numeroPoste' => $listeCommandes[$index]->getPoste(),
                'numeroCommande' => $listeCommandes[$index]->getNumeroCommande()));
            // Retrouve la commande par rapport à l'id_commmande et l'id_poste
            if (count($idPosteCommande) > 0) {

                $recupValueToInt = (int) $idPosteCommande[0]->getIdPoste();
                $recupIdCommande = $idPosteCommande[0]->getIdCommande();

                $qbMatMod = $entitiesChacal->createQueryBuilder('s')
                        ->select('SUM(s.moFab + s.moPose + s.moPoseRemp + s.moPoseVolet) as recupSomme, SUM(s.matModPrixCalcule + s.matModPrixCalculeVolet) as sommeMatMod, SUM(s.prixImpose) as prixImpose, SUM(s.prixTarif) as prixTarif')
                        ->where('s.idElevation = :numCom')
                        ->setParameter('numCom', $recupValueToInt)
                        ->andWhere('s.ptrIdProjet = :ptrIdProjet')
                        ->setParameter('ptrIdProjet', $recupIdCommande);
                // Récupération des résultats
                $queryMatMod = $qbMatMod->getQuery();
                $resultMatMod = $queryMatMod->getOneOrNullResult();

                if ($resultMatMod != null) {
                    // mise à jour du mat et du mod
                    $listeCommandes[$index]->setMatModU($resultMatMod['sommeMatMod']);
                    $listeCommandes[$index]->setModU($resultMatMod['recupSomme']);
                    if ($listeCommandes[$index]->getMatModU() - $resultMatMod['recupSomme'] < 0) {
                        $listeCommandes[$index]->setMatU(0);
                    } else {
                        $listeCommandes[$index]->setMatU($listeCommandes[$index]->getMatModU() - $resultMatMod['recupSomme']);
                    }
                } else {
                    // mise à jour du mat et du mod
                    $listeCommandes[$index]->setMatModU(0);
                    $listeCommandes[$index]->setMatU(0);
                    $listeCommandes[$index]->setModU(0);
                }

                $listeCommandes[$index]->setPrixSaisiUni($resultMatMod['prixImpose']);
                $listeCommandes[$index]->setTarifUnitaire($resultMatMod['prixTarif']);

                $prixTarifUnitaireRemise = 0;
                if ($resultMatMod['prixTarif'] > 0 && $resultMatMod['prixImpose'] == '0') {
                    $calculRemise = ($resultMatMod['prixTarif'] * $listeCommandes[$index]->getRemise()) / 100;
                    $prixTarifUnitaireRemise = $resultMatMod['prixTarif'] - $calculRemise;
                } else {
                    $prixTarifUnitaireRemise = 0;
                }

                $listeCommandes[$index]->setTarifUnitaireRem($prixTarifUnitaireRemise);
                // Si le prix n'as pas été forcé et saisie dans chacal (par quelqu'un du traitement technique)
                //  ALORS se baser sur le tarif proposé par chacal
                if ($resultMatMod['prixImpose'] == '0') {
                    // Vérification afin de savoir si le prix à une remise ou pas
                    if ($prixTarifUnitaireRemise > 0) {
                        // = tarif unitaire remisée * ( (100-remise) / 100)
                        //$value = $resultPrix['prixTarif'] * ( (100 - $listeCommandes[$index]->getRemise()) / 100);
                        $listeCommandes[$index]->setRapport($prixTarifUnitaireRemise / $resultMatMod['sommeMatMod']);
                    } else {
                        // = tarif unitaire  * ( (100-remise) / 100)
                        $value = $resultMatMod['prixTarif'] * ( (100 - $listeCommandes[$index]->getRemise()) / 100);
                        $listeCommandes[$index]->setRapport($value / $resultMatMod['sommeMatMod']);
                    }
                } else {
                    // Si c'est un priix imposé, pas de remise
                    $listeCommandes[$index]->setRapport(($listeCommandes[$index]->getPrixSaisiUni()) / $listeCommandes[$index]->getMatModU());
                }

                $emIntranet2->persist($listeCommandes[$index]);
            }
        }
        $emIntranet2->flush();
    }
}

?>
