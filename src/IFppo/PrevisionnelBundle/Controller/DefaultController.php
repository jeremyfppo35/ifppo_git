<?php

namespace IFppo\PrevisionnelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use IFppo\PrevisionnelBundle\Classes\CommandePrevi;
use IFppo\PrevisionnelBundle\Entity\Parametres;
use IFppo\CommerceBundle\Entity\StatsSage;

class DefaultController extends Controller {

    private $calculePortefeuille;
    private $infosCommande;
    private $emIntranetChacal;

    public function indexAction() {
        // Connexion à la base de données MYSQL du srv-intranet2
        $emIntranet2 = $this->getDoctrine()->getManager('mySql2');
        $statsTechnique = $emIntranet2->getRepository('IFppoPrevisionnelBundle:TestModifDatatable');
        // Récupère toutes les personnes de la table statstechnique
        $listePersonnes = $statsTechnique->findAll();
        return $this->render('IFppoPrevisionnelBundle:Default:index.html.twig', array('listePersonnes' => $listePersonnes));
    }

    public function majTableAction() {

        // Récupère les données passé en POST
        $request = $this->container->get('request');
        //   $nom = $request->request->get('nom');
        $id = $request->request->get('id');
        $dateNaissance = $request->request->get('dn');
        //  $age = $request->request->get('age');
//        $commentaire = $request->request->get('comm');
        // Récupère le tuple par rapport à son ID
        $emIntranet2 = $this->getDoctrine()->getManager('mySql2');
        $entityTest = $emIntranet2->getRepository('IFppoPrevisionnelBundle:TestModifDatatable');
        $recupTuple = $entityTest->findOneBy(array('id' => $id));

        // Convertion du type string en format date pour l'insertion dans la base de données
        $date = new \DateTime($dateNaissance);

        // S'il n'y a aucun résultat ne rien faire
        if (!is_null($recupTuple)) {

            //   $recupTuple->setNom($nom);            
            $recupTuple->setDateNaissance($date);
            //   $recupTuple->setAge($age);  
            //   $recupTuple->setCommentaire($commentaire);  
            // Persiste l'objet
            $emIntranet2->persist($recupTuple);
            // Mise à jour dans la table
            $emIntranet2->flush();
        }

        return new Response();
    }

    /**
     * Fonction appelé pour la redirection vers la page PREVISIONNEL
     * @return type
     */
    public function previAction($etat) {

        set_time_limit(0);
        ignore_user_abort(true);
        $logger = $this->get('logger');
        // Connexion à la base de données MYSQL du srv-chacal
        $this->emIntranetChacal = $this->getDoctrine()->getManager('chacalStat');
        $connexionSage = $this->getDoctrine()->getManager('sageStat');
        $emIntranet2 = $this->getDoctrine()->getManager('mySql2');
        $emIntranet = $this->getDoctrine()->getManager('default');
        $infosClientCommandeIntranet = $emIntranet->getRepository('IFppoCommerceBundle:ClientsSage');
        $this->infosCommande = $this->emIntranetChacal->getRepository('IFppoPrevisionnelBundle:InfosCommandePrevisionnel');
        $infosClientCommande = $connexionSage->getRepository('IFppoCommerceBundle:StatsSage');

        // Compte le nombre de commande restant a saisir
        $this->calculePortefeuille = $this->emIntranetChacal->getRepository('IFppoPrevisionnelBundle:ProjetChacal');

        //Cherche les commandes selon un état
        $commandeASaisir = $this->chercheCommandeASaisirSousDelai(0);
        $compteurAnneeCouante = 0;
        $compteurAnneesPrecedente = 0;
        $date = new \DateTime();
        // Récupère le nb de chassis à saisir pour l'année en cours et pour les années précédentes
        if (!is_null($commandeASaisir)) {

            foreach ($commandeASaisir as $commande) {

                if ($commande['dateCreation']->format('Y') == $date->format('Y')) {
                    $compteurAnneeCouante++;
                } else {
                    $compteurAnneesPrecedente++;
                }
            }
        }

        // Compte le nombre de commande arrivé depuis le début de l'année

        $recupAnnee = $date->format('Y');
        $nbCommandeSaisieAnneeEnCours = $this->compteNbChassisSelonAnnee($recupAnnee);
        $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 1);
        $recupAnneePrecedente = date('Y', $startTime);
        $nbCommandeSaisieAnneesPrec = $this->compteNbChassisSelonAnnee($recupAnneePrecedente);

        // Récupère toutes les commandes de la vue dans chacal InfosCommande        
        // Création de la liste qui sera retournée pour le tableau prévisionnel
        $listeCommandeExtraction = array();
        $compteurTab = 0;
        // Variable pour savoir si c'est le traitement d'une nouvelle commande
        // Une commande peut avoir 15 tours de boucle donc il faut vérifier à chaque fois que nous
        // traiton bien la même commande
        $numeroCommandePrecedent = 0;

        $listeCommandes = $this->chercheListeCommandesSelonEtat($etat);
        $nbResultatListeCommande = count($listeCommandes);

        // S'il y a des résultats
        if ($nbResultatListeCommande > 0) {

            // Initialisation de la variable
            $nouvelleCommande = "";
            $departement = "";
            $cumulQuantite = 0;
            $compteur = 0;
            $ancienId = 0;
            $compteur = 0;
            $i = 0;

            $listeClients = array();
            $listeClientsSage = array();
            $i = 0;
            // Pour chaque commande de la liste de commandes            
            foreach ($listeCommandes as $key => $commande) {
                // Si la commande précédente n'équivaut pas la commande actuelle
                if ($numeroCommandePrecedent != $commande['idProjet']) {
                    // Permet d'éviter de recréer l'objet à chaque tour de boucle et donc
                    // de ne pas remettre à zéro l'objet
                    // Création de l'objet
                    // Si c'est le premier tour de boucle, alors ne pas ajouter dans la liste un résultat vide
                    if ($key == 0) {
                        $nouvelleCommande = new CommandePrevi();
                    } else {
                        $listeCommandeExtraction[$compteurTab] = $nouvelleCommande;
                        $compteurTab++;
                        $nouvelleCommande = new CommandePrevi();
                    }
                }

                // Si le nom du client n'est pas déjà mis alors le cherché
                if (is_null($nouvelleCommande->getNomClient())) {

                    // Création d'un nouveau client
                    $client = new StatsSage();
                    // Recherche dans une liste temporaire
                    if (array_key_exists($commande['idClient'], $listeClients) === FALSE) {
                        // Si le client n'est pas trouvé dans la liste temporaire, alors l'ajouter
                        $clientSage = $infosClientCommande->findOneBy(array('ctNum' => $commande['idClient']));

                        // S'il n'y a pas de résultats
                        if (is_null($clientSage)) {

                            $clientIntranet = $infosClientCommandeIntranet->findOneBy(array('codeClient' => $commande['idClient']));
                            $requetePrenom = 0;
                            if (count($clientIntranet) > 0) {
                                $requetePrenom = $infosClientCommande->findOneBy(array('coNo' => $clientIntranet->getCodeCommercial()));
                            }

                            // S'il y a un résultat
                            if (count($clientIntranet) > 0) {
                                $client->setCtIntitule($clientIntranet->getClient());
                                if (count($requetePrenom) > 0) {
                                    $client->setCoPrenom($requetePrenom->getCoPrenom());
                                    $departement = substr($requetePrenom->getCtCodepostal(), 0, 2);
                                    $client->setCtCodepostal($departement);
                                }
                            }
                        } else {
                            $client->setCtIntitule($clientSage->getCtIntitule());
                            $client->setCoPrenom($clientSage->getCoPrenom());
                            $departement = substr($clientSage->getCtCodepostal(), 0, 2);
                            $client->setCtCodepostal($departement);
                        }
                        $listeClients[$commande['idClient']] = $client;
                    } else {
                        $client = $listeClients[$commande['idClient']];
                    }

                    // Ajout du client avec ses infos
                    $nouvelleCommande->setNomClient($client->getCtIntitule());
                    $nouvelleCommande->setCommercial($client->getCoPrenom());
                }


                // Si le département est vide alors :
                //          - Chercher dans chacal
                //          - Si pas trouvé dans chacal, cherché dans l'intranet 1
                //          - Si pas trouvé dans l'intranet 1, prendre celui de sage
                if (is_null($nouvelleCommande->getDepartement())) {
                    // Si l'adresse a été forcé
                    if ($commande['adresseForce'] == TRUE) {
                        $logger->info('----------------------CLIENT CIBLE----------------------CP:' . $commande['codePostal']);
                        if (is_null($commande['codePostal']) || empty($commande['codePostal'])) {
                            $nouvelleCommande->setDepartement("ENLEVEMENT CLIENT");
                        } else {
                            $nouvelleCommande->setDepartement(substr($commande['codePostal'], 0, 2));
                        }
                    } else {
                        $client = new StatsSage();
                        // Recherche dans une liste temporaire
                        if (array_key_exists($commande['idClient'], $listeClientsSage) === FALSE) {
                            // Si le client n'est pas trouvé dans la liste temporaire, alors l'ajouter
                            $client = $infosClientCommandeIntranet->findOneBy(array('codeClient' => $commande['idClient']));
                            $listeClientsSage[$commande['idClient']] = $client;
                        } else {
                            $client = $listeClientsSage[$commande['idClient']];
                        }
                        $recupValue = "";
                        if (count($client) > 0) {
                            $recupValue = substr($client->getCpLivraison(), 0, 2);
                            $nouvelleCommande->setDepartement(substr($client->getCpLivraison(), 0, 2));
                            if ($commande['idClient'] === 'C000617') {
                                $logger->info('----------------------CLIENT CIBLE----------------------SET DPRT');
                            }
                        }
                        // Si c'est vide, alors mettre la valeur trouvé dans Sage
                        if (empty($recupValue)) {
                            if ($commande['idClient'] === 'C000617') {
                                $logger->info('----------------------CLIENT CIBLE----------------------DEPARTEMENT');
                            }

                            $nouvelleCommande->setDepartement($departement);
                        }
                    }
                }

                if (is_null($nouvelleCommande->getRefCommande())) {
                    $nouvelleCommande->setRefCommande($commande['refCommande']);
                }

                if (is_null($nouvelleCommande->getNumCommande())) {
                    $nouvelleCommande->setNumCommande($commande['numCommande']);
                }

                if (is_null($nouvelleCommande->getSemaineFab())) {
                    $nouvelleCommande->setSemaineFab($commande['semaineFabrication']);
                }

                if (is_null($nouvelleCommande->getDateReception())) {

                    if ($commande['typeAnnexe'] == '20001') {
                        $nouvelleCommande->setDateReception($commande['annexe']);
                    } else {
                        $nouvelleCommande->setDateReception("Aucune date, voir Chacal");
                    }
                }

                // Récupération des quantités
                if (is_null($nouvelleCommande->getQuantiteAlu())) {
                    // Si c'est une quantité d'alu
                    if ($commande['type'] == '1048840') {

                        $nouvelleCommande->setQuantiteAlu($commande['quantite'] + $nouvelleCommande->getQuantiteAlu());
                        $nouvelleCommande->setGamme("ALUMINIUM");
                    }
                }

                if (is_null($nouvelleCommande->getQuantiteWisio())) {
                    // Si c'est une quantité de wisio
                    if ($commande['type'] == '1048841') {

                        $nouvelleCommande->setQuantiteWisio($commande['quantite'] + $nouvelleCommande->getQuantiteWisio());
                        $nouvelleCommande->setGamme("WISIO");
                    }
                }

                if (is_null($nouvelleCommande->getQuantiteCintre())) {
                    // Si c'est une quantité de cintré
                    if ($commande['type'] == '1048842') {

                        $nouvelleCommande->setQuantiteCintre($commande['quantite'] + $nouvelleCommande->getQuantiteCintre());
                        $nouvelleCommande->setGamme("STANDARD");
                    }
                }

                if (is_null($nouvelleCommande->getQuantiteCouleur())) {
                    // Si c'est une quantité de couleur
                    if ($commande['type'] == '1048843') {

                        $nouvelleCommande->setQuantiteCouleur($commande['quantite'] + $nouvelleCommande->getQuantiteCouleur());
                        $nouvelleCommande->setGamme("STANDARD");
                    }
                }

                if (is_null($nouvelleCommande->getQuantiteFuturol())) {
                    // Si c'est du futurol
                    if ($commande['type'] == '1048845') {

                        $nouvelleCommande->setQuantiteFuturol($commande['quantite'] + $nouvelleCommande->getQuantiteFuturol());
                        $nouvelleCommande->setGamme("FUTUROL");
                    }
                }

                if (is_null($nouvelleCommande->getQuantite())) {
                    // C'est une quantité standard
                    if ($commande['type'] == '1048844') {

                        $nouvelleCommande->setQuantite($commande['quantite']);
                    }
                }

                if (is_null($nouvelleCommande->getDelaiImpose())) {
                    // Si c'est un délai alors l'annexe doit valoir 20002
                    if ($commande['typeAnnexe'] == '20002') {
                        if ($commande['annexe'] == '§§1048989' || $commande['annexe'] == '§§1050572') {
                            $logger->info('----------------------DELAI IMPOSE----------------------:' . $commande['idProjet'] . ' et le num de cde : '.$commande['numCommande']);
                            $nouvelleCommande->setDelaiImpose(TRUE);
                        }
                    }
                }

                if (is_null($nouvelleCommande->getCommentaire())) {
                    // Si c'est un commentaire alors l'annexe doit valoir 20003
                    if ($commande['typeAnnexe'] == '20003') {
                        $nouvelleCommande->setCommentaire($commande['annexe']);
                    }
                }

                // Si c'est le dernier résultat, alors ajouter dans la liste
                if ($key == $nbResultatListeCommande - 1) {
                    // Ajout de la commande
                    $listeCommandeExtraction[$compteurTab] = $nouvelleCommande;
                }
                // Récupère la commande précédente, pour test en début de boucle
                $numeroCommandePrecedent = $commande['idProjet'];
                $i++;
            }
        }

        $emIntranet2 = $this->getDoctrine()->getManager('mySql2');
        $entityParam = $emIntranet2->getRepository('IFppoPrevisionnelBundle:Parametres');
        $recupTuple = $entityParam->findOneBy(array('id' => 0));

        return $this->render('IFppoPrevisionnelBundle:Default:previsionnel.html.twig', array('listeCommandes' => $listeCommandeExtraction,
                    'nbChassisAnneesPrec' => $compteurAnneesPrecedente,
                    'nbCommandeSaisieAnneesPrec' => $nbCommandeSaisieAnneesPrec,
                    'nbCommandeSaisieAnneeEnCours' => $nbCommandeSaisieAnneeEnCours,
                    'semaineProd' => $recupTuple->getSemaineProd(),
                    'nbChassisAnneeCour' => $compteurAnneeCouante));
    }

    /**
     * Met à jour le champ semaineProduction de la table paramètre de l'intranet 2
     */
    public function majSemaineProdAction() {

        // Récupère les données passé en POST
        $request = $this->container->get('request');
        // Récupère la semaine passé en param
        $semaine = $request->request->get('semaine');
        $ancienneSemaine = $request->request->get('courante');

        $emIntranet2 = $this->getDoctrine()->getManager('mySql2');
        $entityParam = $emIntranet2->getRepository('IFppoPrevisionnelBundle:Parametres');
        $recupTuple = $entityParam->findOneBy(array('id' => 0));

        if (!is_null($recupTuple)) {

            //   $recupTuple->setNom($nom);            
            $recupTuple->setSemaineProd($semaine);
            //   $recupTuple->setAge($age);  
            //   $recupTuple->setCommentaire($commentaire);  
            // Persiste l'objet
            $emIntranet2->persist($recupTuple);
            // Mise à jour dans la table
            $emIntranet2->flush();
        }

        return new Response();
    }

    public function compteNbChassisSelonAnnee($annee) {

        $requeteCount = $this->calculePortefeuille->createQueryBuilder('i')
                ->select('COUNT(i.idProjet)')
                ->where('i.etat != :etat')
                ->setParameter('etat', 0)
                ->andWhere('(i.numCommande < :test OR i.numCommande LIKE :refab)')
                ->setParameter('test', '50000')
                ->setParameter('refab', 'R%')
                ->andWhere('i.dateCreation LIKE :annee ')
                ->setParameter('annee', "%" . $annee . "%");
        $recupRequeteCount = $requeteCount->getQuery();
        return $nbCommandeSaisieAnneeEnCours = $recupRequeteCount->getSingleScalarResult();
    }

    public function chercheCommandeASaisirSousDelai($etat) {

        $date = new \DateTime("now");
        $delai = -400;
        $requeteCount = "";

        if ($etat == 0) {

            $requeteCount = $this->calculePortefeuille->createQueryBuilder('i')
                    ->select('i.idProjet,i.dateCreation')
                    ->where('i.etat = :etat')
                    ->setParameter('etat', 0)
                    ->andWhere('(i.numCommande < :test OR i.numCommande LIKE :refab)')
                    ->setParameter('test', '50000')
                    ->setParameter('refab', 'R%')
                    ->andWhere('DATE_DIFF(i.dateCreation,:dateJour) > :delai ')
                    ->setParameter('dateJour', $date)
                    ->setParameter('delai', $delai);
        } else {
            $requeteCount = $this->calculePortefeuille->createQueryBuilder('i')
                    ->select('i.idProjet,i.dateCreation')
                    ->where('(i.numCommande < :test OR i.numCommande LIKE :refab)')
                    ->setParameter('test', '50000')
                    ->setParameter('refab', 'R%')
                    ->andWhere('DATE_DIFF(i.dateCreation,:dateJour) > :delai ')
                    ->setParameter('dateJour', $date)
                    ->setParameter('delai', $delai);
        }

        $recupRequeteCount = $requeteCount->getQuery();
        return $recupRequeteCount->getResult();
    }

    public function chercheListeCommandesSelonEtat($etat) {

        $date = new \DateTime("now");
        $delai = -400;
        $prep = "";
        if ($etat == 0) {
            $conn = $this->get('doctrine.dbal.chacalstat_connection');
            $prep = $conn->prepare("SELECT IdProjet as idProjet,
                                       tNom as idClient,
                                       tNomProjet as numCommande,
                                       tReference1 as refCommande,
                                       bAdresseChantier as adresseForce,
                                       oSemaineFabrication as semaineFabrication,
                                       iTypeAnnexe as typeAnnexe,
                                       mAnnexe as annexe,
                                       PtrIdVariableEnv as type,
                                       tCodePostal as codePostal,
                                       dValue as quantite                                        
            FROM InfosCommande WHERE oEtatProjet = 0 AND (tNomProjet < '50000' OR tNomProjet LIKE 'R%') AND DATEDIFF(DAY,dDateCreation,CURRENT_TIMESTAMP) < 400 ORDER BY idProjet ASC");
            $prep->execute();
        } else {
            $conn = $this->get('doctrine.dbal.chacalstat_connection');
            $prep = $conn->prepare("SELECT IdProjet as idProjet,
                                       tNom as idClient,
                                       tNomProjet as numCommande,
                                       tReference1 as refCommande,
                                       bAdresseChantier as adresseForce,
                                       oSemaineFabrication as semaineFabrication,
                                       iTypeAnnexe as typeAnnexe,
                                       mAnnexe as annexe,
                                       PtrIdVariableEnv as type,
                                       tCodePostal as codePostal,
                                       dValue as quantite                                        
            FROM InfosCommande WHERE oEtatProjet != 0 AND (tNomProjet < '50000' OR tNomProjet LIKE 'R%') AND DATEDIFF(DAY,dDateCreation,CURRENT_TIMESTAMP) < 400 ORDER BY idProjet ASC");
            $prep->execute();
        }

        return $prep->fetchAll();
    }

}