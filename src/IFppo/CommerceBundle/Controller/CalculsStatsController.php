<?php

namespace IFppo\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IFppo\CommerceBundle\Entity\Commercestats;
use IFppo\CommerceBundle\Entity\StatsSage;
use IFppo\CommerceBundle\Entity\Historiquestats;

/**
 * Description of CalculsStats
 *
 * @author jeremy.denieul
 */
class CalculsStatsController extends Controller {

    public function indexAction() {

        set_time_limit(0);
        ignore_user_abort(true);
        // 4 postes qui font les opérations spéciales gains //
        $listNumPosteOperationSpeGain = array();
        $listNumPosteOperationSpeGain[0] = 9000;
        $listNumPosteOperationSpeGain[1] = 9001;
        $listNumPosteOperationSpeGain[2] = 9004;
        $listNumPosteOperationSpeGain[3] = 9006;
        $countTourBoucle = 0;
        $date = new \DateTime;
        //$recupAnnee = "2012";
        $recupAnnee = $date->format('Y');
        // Connexion sur la base de données MYSQL
        $em = $this->getDoctrine()->getManager('default');

        // Connexion à la base de données MYSQL du srv-intranet2
        $emStatsCommerce = $this->getDoctrine()->getManager('mySql2');

        $entitiesFacturation = $em->getRepository('IFppoCommerceBundle:FacturationCommande');
        $entitiesClient = $em->getRepository('IFppoCommerceBundle:ClientsSage');
        $entitiesConfirmation = $em->getRepository('IFppoCommerceBundle:ConfirmationCommande');
        //Connexion à CHACAL //
        $emChacal = $this->getDoctrine()->getManager('chacalStat');
        // Connexion à SAGE //
        $emSage = $this->getDoctrine()->getManager('sageStat');
        // Connexion à SAGE
        $entitiesSage = $emSage->getRepository('IFppoCommerceBundle:StatsSage');
        $entitiesSageFraisTransport = $emSage->getRepository('IFppoCommerceBundle:StatsSageFraisTransport');
        $entitiesSageNbImpayes = $emSage->getRepository('IFppoCommerceBundle:StatsSageNbImpayes');
        // Connexion à CHACAL //
        $entitiesChacal = $emChacal->getRepository('IFppoCommerceBundle:StatsChacal');
        // Connexion à default
        $entitiesChacalDivers = $em->getRepository('IFppoCommerceBundle:ChacalDivers');

        // Récupère tout les clients actifs //
        $qb = $entitiesFacturation->createQueryBuilder('f')
                ->select('DISTINCT f.numeroClient');
        $query = $qb->getQuery();
        $result = $query->getResult();

        foreach ($result as $value) {

            // Récupère le nom du client dans sage //
            $qbSageNom = $entitiesSage->createQueryBuilder('s')
                    ->select('DISTINCT s.ctIntitule')
                    ->where('s.ctNum = :idClient')
                    ->setParameter('idClient', $value['numeroClient'])
                    ->andWhere('s.ctType = :ctType')
                    ->setParameter('ctType', 0);
            // Permet de ne pas tomber en erreur même s'il n'y a pas de résultat //
            $querySageNom = $qbSageNom->getQuery();
            $resultSageNom = $querySageNom->getOneOrNullResult();
            // S'il y a un INTITULE dans SAGE alors c'est un client toujours ACTIF
            $statCommerce = "";

            if ($resultSageNom != "") {
                $statCommerce = $emStatsCommerce->getRepository('IFppoCommerceBundle:Commercestats')->findOneBy(array('idclient' => $value['numeroClient']));
                // S'il ne renvoie rien, création de l'objet commercestats
                // pour insertion
                // sinon ça sera un update
                if (!$statCommerce) {
                    $statCommerce = new Commercestats();
                }
                $statCommerce->setIdClient($value['numeroClient']);
                $statCommerce->setNomClient($resultSageNom['ctIntitule']);

                // Récupère les frais de transport
                $qbSageFT = $entitiesSageFraisTransport->createQueryBuilder('s')
                        ->select('SUM(s.ecMontant) as somme')
                        ->where('s.ecIntitule LIKE :idClient')
                        ->setParameter('idClient', 'FACTURE ' . $statCommerce->getNomClient());
                // Permet de ne pas tomber en erreur même s'il n'y a pas de résultat
                $querySageFT = $qbSageFT->getQuery();
                $resultSageFT = $querySageFT->getOneOrNullResult();
                // Récupère la valeur des vrais de transport pour ensuite soustraire cette valeur au CA de l'année                
                if ($resultSageFT['somme'] != null) {
                    $statCommerce->setFraisTransport($resultSageFT['somme']);
                } else {
                    $statCommerce->setFraisTransport(0);
                }

                // Récupère le CC du client en même temps dans sage //
                $qbSageCC = $entitiesSage->createQueryBuilder('s')
                        ->select('s.coNom')
                        ->where('s.ctNum = :idClient')
                        ->setParameter('idClient', $value['numeroClient']);
                $querySageCC = $qbSageCC->getQuery();
                $resultSageCC = $querySageCC->getOneOrNullResult();
                if ($resultSageCC != "") {
                    $statCommerce->setCodeCommercial($resultSageCC['coNom']);
                } else {
                    $statCommerce->setCodeCommercial("Aucun");
                }

                // Récupère le département du client //
                $qbSageDPT = $entitiesSage->createQueryBuilder('s')
                        ->select('s.ctCodepostal')
                        ->where('s.ctNum = :idClient')
                        ->setParameter('idClient', $value['numeroClient']);
                $querySageDPT = $qbSageDPT->getQuery();
                $resultSageDPT = $querySageDPT->getOneOrNullResult();
                if ($resultSageDPT != "") {
                    $statCommerce->setCodePostal(substr($resultSageDPT['ctCodepostal'], 0, 2));
                } else {
                    $statCommerce->setCodePostal("Aucun");
                }

                // Récupère la date d'ouverture du compte du client //
                $qbSageOUV = $entitiesSage->createQueryBuilder('s')
                        ->select('s.ctDateCreation')
                        ->where('s.ctNum = :idClient')
                        ->setParameter('idClient', $value['numeroClient']);
                $querySageOUV = $qbSageOUV->getQuery();
                $resultSageOUV = $querySageOUV->getOneOrNullResult();
                if ($resultSageOUV != '') {
                    $statCommerce->setOuvertureCompte(substr($resultSageOUV['ctDateCreation'], 0, 7));
                } else {
                    $statCommerce->setOuvertureCompte("Inconnu");
                }

                // Récupère l'assurance du client //
                $qbSageAss = $entitiesSage->createQueryBuilder('s')
                        ->select('s.ctAssurance')
                        ->where('s.ctNum = :idClient')
                        ->setParameter('idClient', $value['numeroClient']);
                $querySageAss = $qbSageAss->getQuery();
                $resultSageAss = $querySageAss->getOneOrNullResult();
                if ($resultSageAss['ctAssurance'] > 0.1) {
                    $statCommerce->setAssuranceValid("O");
                } else {
                    $statCommerce->setAssuranceValid("N");
                }

                // Remise 
                $qbClientsSage = $entitiesClient->createQueryBuilder('c')
                        ->select('c.remise')
                        ->where('c.codeClient = :idClient')
                        ->setParameter('idClient', $value['numeroClient']);
                $queryClientsSage = $qbClientsSage->getQuery();
                $resultClientsSage = $queryClientsSage->getOneOrNullResult();
                if ($resultClientsSage['remise'] != null) {
                    $statCommerce->setRemise($resultClientsSage['remise']);
                } else {
                    $statCommerce->setRemise(0);
                }

                // Indice
                $statCommerce->setIndice((100 - $statCommerce->getRemise()) / 100);

                // Proforma
                $qb = $entitiesFacturation->createQueryBuilder('f')
                        ->select('SUM(f.montantTotalHt) as somme')
                        ->where('f.dateFacture LIKE :recupAnnee')
                        ->setParameter('recupAnnee', '%' . $recupAnnee . '%')
                        ->andWhere('f.numeroClient = :numClient')
                        ->setParameter('numClient', $statCommerce->getIdClient())
                        ->andWhere('f.proforma = :proforma')
                        ->setParameter('proforma', 1);
                $query = $qb->getQuery();
                $result = $query->getOneOrNullResult();
                if ($result['somme'] == null) {
                    $statCommerce->setProforma(0);
                } else {
                    $statCommerce->setProforma($result['somme']);
                }

                // CA de l'année courante
                $qb = $entitiesFacturation->createQueryBuilder('f')
                        ->select('SUM(f.montantTotalHt) as somme')
                        ->where('f.dateFacture LIKE :recupAnnee')
                        ->setParameter('recupAnnee', '%' . $recupAnnee . '%')
                        ->andWhere('f.numeroClient = :numClient')
                        ->setParameter('numClient', $statCommerce->getIdClient());
                $query = $qb->getQuery();
                $result = $query->getOneOrNullResult();
                if ($result['somme'] == null) {
                    $statCommerce->setCaN(0);
                } else {
                    $statCommerce->setCaN($result['somme'] - $statCommerce->getProforma());
                }

                // CA de l'année n -1
                // Récupère l'année précédente
                $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 1);
                $recupAnneePrecendente = date('Y', $startTime);
                $qb = $entitiesFacturation->createQueryBuilder('f')
                        ->select('SUM(f.montantTotalHt) as somme')
                        ->where('f.dateFacture LIKE :recupAnnee')
                        ->setParameter('recupAnnee', '%' . $recupAnneePrecendente . '%')
                        ->andWhere('f.numeroClient = :numClient')
                        ->setParameter('numClient', $statCommerce->getIdClient());
                $query = $qb->getQuery();
                $result = $query->getOneOrNullResult();
                if ($result['somme'] == null) {
                    $statCommerce->setCaN1(0);
                } else {
                    $statCommerce->setCaN1($result['somme']);
                }

                // Progression en %
                // S'il n'y a pas de chiffre d'affaire dans l'année n-1
                // alors la progression en valeur sera de 100 %

                $recupCumulN1 = $this->calculCumulCaN1($statCommerce->getIdClient(), $recupAnneePrecendente);
                if ($statCommerce->getCaN1() != 0 && $recupCumulN1 != 0) {
                    $statCommerce->setProgressionPourcentage((($statCommerce->getCaN() - $recupCumulN1) / $recupCumulN1) * 100);
                } else {
                    $statCommerce->setProgressionPourcentage(100);
                }

                // Progression en valeur
                $statCommerce->setProgressionValeur($statCommerce->getCaN() - $recupCumulN1);

                // Récupère les commandes d'un client
                $qb = $entitiesFacturation->createQueryBuilder('f')
                        ->select('f.idCommande')
                        ->where('f.dateFacture LIKE :recupAnnee')
                        ->setParameter('recupAnnee', '%' . $recupAnnee . '%')
                        ->andWhere('f.numeroClient = :numClient')
                        ->setParameter('numClient', $statCommerce->getIdClient());
                $query = $qb->getQuery();
                $result = $query->getResult();
                // S'il n'y a pas de résultat facturation,
                // les stats passe auto à zéro pour l'année
                if ($result == null) {
                    $statCommerce->setFuturol(0);
                    $statCommerce->setOperationSpecialesGains(0);
                    $statCommerce->setAluValeur(0);
                    $statCommerce->setNbChassisAlu(0);
                    $statCommerce->setCintreValeur(0);
                    $statCommerce->setNbChassisCintre(0);
                    $statCommerce->setVisionValeur(0);
                    $statCommerce->setNbChassisVision(0);
                    $statCommerce->setDivers(0);
                    $statCommerce->setDiversAvoirs(0);
                    $statCommerce->setPrixPublic(0);
                    $statCommerce->setRemiseReelle(0);
                    $statCommerce->setStandardValeur(0);
                    $statCommerce->setNbChassisStandard(0);
                } else {
                    //-----------------------------------------------------
                    // Récupération dans la table confirmation_commande des divers AVOIRS
                    //-----------------------------------------------------                    
                    $qbDivers = $entitiesFacturation->createQueryBuilder('f')
                            ->select('SUM(f.montantTotalHt) as res')
                            ->where('f.idCommande IN (:idCommande)')
                            ->setParameter('idCommande', $result)
                            ->andWhere('f.avoir = :avoir')
                            ->setParameter('avoir', 1);
                    $queryDivers = $qbDivers->getQuery();
                    $resultDivers = $queryDivers->getOneOrNullResult();
                    if ($resultDivers['res'] != null) {
                        $statCommerce->setDiversAvoirs($resultDivers['res']);
                    } else {
                        $statCommerce->setDiversAvoirs(0);
                    }


                    //-----------------------------------------------------
                    // Récupération dans la table confirmation_commande des DIVERS
                    // Il faut que pour UNE commande donnée, l'id du poste soit toujours égal à 32767
                    //-----------------------------------------------------                       
                    $qbCcDiversPrix = $entitiesFacturation->createQueryBuilder('c')
                            ->select('SUM(c.montantTotalHt) as somme')
                            ->where('c.divers = :divers')
                            ->setParameter('divers', 1)
                            ->andWhere('c.idCommande IN (:idCommande)')
                            ->setParameter('idCommande', $result);
                    $queryCcDiversPrix = $qbCcDiversPrix->getQuery();
                    // Récupération du prix total hors taxe
                    $resultCcDiversPrix = $queryCcDiversPrix->getOneOrNullResult();
                    if ($resultCcDiversPrix['somme'] != null && $resultCcDiversPrix['somme'] > 0) {
                        $statCommerce->setDivers($resultCcDiversPrix['somme']);
                    } else {
                        $statCommerce->setDivers(0);
                    }

                    //-----------------------------------------------------
                    //FUTUROL
                    //-----------------------------------------------------
                    // Parcours des commandes
                    $qbFuturol = $entitiesChacalDivers->createQueryBuilder('cd')
                            ->select('SUM((cd.quantiteCommentaire * cd.prixHtUnitaire)) as res')
                            ->where('cd.futurol = :futurol')
                            ->setParameter('futurol', 1)
                            ->andWhere('cd.ptridprojet IN (:idCommande)')
                            ->setParameter('idCommande', $result);
                    $queryFuturol = $qbFuturol->getQuery();
                    $resultFuturol = $queryFuturol->getOneOrNullResult();
                    // Modifie le chiffre futurol pour chaque client
                    if ($resultFuturol['res'] != null) {
                        $statCommerce->setFuturol($resultFuturol['res']);
                    } else {
                        $statCommerce->setFuturol(0);
                    }

                    //-----------------------------------------------------
                    // OPERATIONS SPECIALES / GAINS ************
                    //-----------------------------------------------------
                    $entitiesConfirmation = $em->getRepository('IFppoCommerceBundle:ConfirmationCommande');
                    // Parcours des commandes
                    $qb = $entitiesConfirmation->createQueryBuilder('c')
                            ->select('SUM(c.prixUnitairePoste * c.quantitePoste) as somme')
                            ->where('c.idPoste IN (:idPoste)')
                            ->setParameter('idPoste', $listNumPosteOperationSpeGain)
                            ->andWhere('c.idCommande IN (:idCommande)')
                            ->setParameter('idCommande', $result);
                    $query = $qb->getQuery();
                    $resultOpSpecialParGain = $query->getOneOrNullResult();

                    if ($resultOpSpecialParGain['somme'] != null) {
                        $statCommerce->setOperationSpecialesGains($resultOpSpecialParGain['somme']);
                    } else {
                        $statCommerce->setOperationSpecialesGains(0);
                    }

                    //-----------------------------------------------------
                    // -------------------- DEBUT DU Cintre en valeur ET QUANTITE ------------------------------
                    //-----------------------------------------------------                    
                    $entitiesChacal = $emChacal->getRepository('IFppoCommerceBundle:StatsChacal');

                    // Récupère la quantite, le numéro de la commande et le numéro de poste
                    // De toutes les commandes cintrés
                    $qb = $entitiesChacal->createQueryBuilder('c')
                            ->select('DISTINCT c.ptrIdProjet', 'SUM(c.iQuantite) as somme')
                            ->where('c.oForme != :oForme')
                            ->setParameter('oForme', 1)
                            ->andWhere('c.ptrIdProjet IN (:idCommande)')
                            ->setParameter('idCommande', $result)                            
                            ->groupBy('c.ptrIdProjet');
                    $query = $qb->getQuery();
                    $resultCommandeCintre = $query->getResult();
                    $cumul = 0;
                    $cumulQuantite = 0;
                    $cumulOperation = 0;
                    for ($index1 = 0; $index1 < count($resultCommandeCintre); $index1++) {
                        // Parcours des commandes
                        $qb = $entitiesConfirmation->createQueryBuilder('c')
                                ->select('SUM(c.prixTotalHtPoste) as somme')
                                ->where('c.idCommande = :idCommande')
                                ->setParameter('idCommande', $resultCommandeCintre[$index1]['ptrIdProjet']);
                        $query = $qb->getQuery();
                        $resultCintre = $query->getOneOrNullResult();

                        if ($resultCintre != null) {
                            $cumul += $resultCintre['somme'];
                            $cumulQuantite += $resultCommandeCintre[$index1]['somme'];
                        } else {
                            $cumul += 0;
                            $cumulQuantite += 0;
                        }
                        $countTourBoucle++;


                        // Cumul des opérations faites pour les commandes
                        $qbOperationsSpe = $entitiesConfirmation->createQueryBuilder('c')
                                ->select('SUM(c.prixUnitairePoste) as somme')
                                ->where('c.idCommande = :idCommande')
                                ->setParameter('idCommande', $resultCommandeCintre[$index1]['ptrIdProjet'])
                                ->andWhere('c.idPoste IN (:idPoste)')
                                ->setParameter('idPoste', $listNumPosteOperationSpeGain);
                        $queryOperationsSpe = $qbOperationsSpe->getQuery();
                        $resultVisionOperationsSpe = $queryOperationsSpe->getOneOrNullResult();
                        // S'il y a un résultat
                        if ($resultVisionOperationsSpe != null) {
                            $cumulOperation += $resultVisionOperationsSpe['somme'];
                        }
                    }

                    $statCommerce->setCintreValeur($cumul - $cumulOperation);
                    $statCommerce->setNbChassisCintre($cumulQuantite);
                    // -------------------- FIN DU CINTRÉ ------------------------------
                    // -------------------- DEBUT DU Vision en valeur ET QUANTITE ------------------------------
                    // Récupère la quantite, le numéro de la commande et le numéro de poste
                    // De toutes les commandes visions
                    // DISTINCT sur le numéro de commande
                    // GROUPE par numéro de commande
                    // SOMME sur la quantité
                    $qb = $entitiesChacal->createQueryBuilder('c')
                            ->select('DISTINCT c.ptrIdProjet', 'SUM(c.iQuantite) as somme')
                            ->where('c.ptrIdGamme = :idGamme')
                            ->setParameter('idGamme', 1048578)
                            ->andWhere('c.ptrIdProjet IN (:idCommande)')
                            ->setParameter('idCommande', $result)
                            ->groupBy('c.ptrIdProjet');
                    $query = $qb->getQuery();
                    $resultCommandeVision = $query->getResult();
                    $cumul = 0;
                    $cumulQuantite = 0;
                    // Sans l'id poste (donc doit prendre en compte les divers qui sont dans 
                    // cette commande vision
                    // Cumul des opérations faites dans les différentes commandes
                    $cumulOperation = 0;
                    for ($index1 = 0; $index1 < count($resultCommandeVision); $index1++) {
                        // Parcours des commandes
                        $qb = $entitiesConfirmation->createQueryBuilder('c')
                                ->select('SUM(c.prixTotalHtPoste) as somme')
                                ->where('c.idCommande = :idCommande')
                                ->setParameter('idCommande', $resultCommandeVision[$index1]['ptrIdProjet']);
                        $query = $qb->getQuery();
                        $resultVision = $query->getOneOrNullResult();
                        if ($resultVision != null) {
                            $cumul += $resultVision['somme'];
                            $cumulQuantite += $resultCommandeVision[$index1]['somme'];
                        } else {
                            $cumul += 0;
                            $cumulQuantite += 0;
                        }

                        // Cumul des opérations faites pour les commandes
                        $qbOperationsSpe = $entitiesConfirmation->createQueryBuilder('c')
                                ->select('SUM(c.prixUnitairePoste) as somme')
                                ->where('c.idCommande = :idCommande')
                                ->setParameter('idCommande', $resultCommandeVision[$index1]['ptrIdProjet'])
                                ->andWhere('c.idPoste IN (:idPoste)')
                                ->setParameter('idPoste', $listNumPosteOperationSpeGain);
                        $queryOperationsSpe = $qbOperationsSpe->getQuery();
                        $resultVisionOperationsSpe = $queryOperationsSpe->getOneOrNullResult();
                        // S'il y a un résultat
                        if ($resultVisionOperationsSpe != null) {
                            $cumulOperation += $resultVisionOperationsSpe['somme'];
                        }
                    }


                    $statCommerce->setVisionValeur($cumul - $cumulOperation);
                    $statCommerce->setNbChassisVision($cumulQuantite);
                    // -------------------- FIN DU VISION ------------------------------
                    // -------------------- DEBUT De l'alu en valeur ET QUANTITE ------------------------------
                    // Récupère la quantite, le numéro de la commande et le numéro de poste
                    // De toutes les commandes cintrés
                    $qb = $entitiesChacal->createQueryBuilder('c')
                            ->select('DISTINCT c.ptrIdProjet', 'SUM(c.iQuantite) as somme')
                            ->where('c.ptrIdGamme = :idGamme')
                            ->setParameter('idGamme', 1048579)
                            ->andWhere('c.ptrIdProjet IN (:idCommande)')
                            ->setParameter('idCommande', $result)
                            ->groupBy('c.ptrIdProjet');
                    $query = $qb->getQuery();
                    $resultCommandeAlu = $query->getResult();
                    $cumul = 0;
                    $cumulQuantite = 0;
                    $cumulOperation = 0;
                    for ($index1 = 0; $index1 < count($resultCommandeAlu); $index1++) {
                        // Parcours des commandes
                        $qb = $entitiesConfirmation->createQueryBuilder('c')
                                ->select('SUM(c.prixTotalHtPoste) as somme')
                                ->where('c.idCommande = :idCommande')
                                ->setParameter('idCommande', $resultCommandeAlu[$index1]['ptrIdProjet']);
                        $query = $qb->getQuery();
                        $resultAlu = $query->getOneOrNullResult();

                        // S'il n'y a pas d'alu
                        if ($resultAlu['somme'] != null) {
                            $cumul += $resultAlu['somme'];
                            $cumulQuantite += $resultCommandeAlu[$index1]['somme'];
                        } else {
                            $cumul += 0;
                            $cumulQuantite += 0;
                        }

                        // Cumul des opérations faites pour les commandes
                        $qbOperationsSpe = $entitiesConfirmation->createQueryBuilder('c')
                                ->select('SUM(c.prixUnitairePoste) as somme')
                                ->where('c.idCommande = :idCommande')
                                ->setParameter('idCommande', $resultCommandeAlu[$index1]['ptrIdProjet'])
                                ->andWhere('c.idPoste IN (:idPoste)')
                                ->setParameter('idPoste', $listNumPosteOperationSpeGain);
                        $queryOperationsSpe = $qbOperationsSpe->getQuery();
                        $resultVisionOperationsSpe = $queryOperationsSpe->getOneOrNullResult();
                        // S'il y a un résultat
                        if ($resultVisionOperationsSpe != null) {
                            $cumulOperation += $resultVisionOperationsSpe['somme'];
                        }
                    }

                    $statCommerce->setAluValeur($cumul - $cumulOperation);
                    $statCommerce->setNbChassisAlu($cumulQuantite);
                    // -------------------- FIN DE L'ALU ------------------------------   
                    //-------------------- STANDARD ------------------------------  
                    // Récupère la quantite
                    // De toutes les commandes standard
                    $qbStandard = $entitiesChacal->createQueryBuilder('c')
                            ->select('SUM(c.iQuantite) as somme')
                            ->where('c.ptrIdGamme = :idGamme')
                            ->setParameter('idGamme', 1048577)
                            ->andWhere('c.oForme = :oForme')
                            ->setParameter('oForme', 1)
                            ->andWhere('c.ptrIdProjet IN (:idCommande)')
                            ->setParameter('idCommande', $result);
                    $queryStandard = $qbStandard->getQuery();
                    $resultCommandeStandard = $queryStandard->getOneOrNullResult();
                    // S'il n'y a pas d'alu
                    if ($resultCommandeStandard['somme'] != null) {
                        $statCommerce->setNbChassisStandard($resultCommandeStandard['somme']);
                    } else {
                        $statCommerce->setNbChassisStandard(0);
                    }
                    // Standard en valeur
                    $statCommerce->setStandardValeur($statCommerce->getCaN() - ( $statCommerce->getCintreValeur() + $statCommerce->getVisionValeur() + $statCommerce->getAluValeur() + $statCommerce->getDivers() + $statCommerce->getFuturol() ));
                    // Prix public                    
                    $statCommerce->setPrixPublic($statCommerce->getCaN() / $statCommerce->getIndice());
                    //Remise réelle (( CA année en cours / (Prix public + OpéSpégain) ) - 1 ) x -100)
                    if (($statCommerce->getPrixPublic() || $statCommerce->getOperationSpecialesGains()) > 0) {
                        $statCommerce->setRemiseReelle(( ( $statCommerce->getCaN() / ( $statCommerce->getPrixPublic() + $statCommerce->getOperationSpecialesGains() ) ) - 1 ) * -100);
                    } else {
                        $statCommerce->setRemiseReelle(0);
                    }
                }
                $statCommerce->setNbimpayesincident(0);

                // Récupère la catégorie du client dans sage //
                $qbSageCategorie = $entitiesSage->createQueryBuilder('s')
                        ->select('s.ctStats01')
                        ->where('s.ctNum = :idClient')
                        ->setParameter('idClient', $value['numeroClient']);
                // Permet de ne pas tomber en erreur même s'il n'y a pas de résultat //
                $querySageCategorie = $qbSageCategorie->getQuery();
                $resultSageCategorie = $querySageCategorie->getOneOrNullResult();
                $statCommerce->setCategorie($resultSageCategorie['ctStats01']);

                // Récupère le nombre d'impayés du client
                $qbSageImpayes = $entitiesSageNbImpayes->createQueryBuilder('s')
                        ->select('s.nbImpayes')
                        ->where('s.ctNum = :idClient')
                        ->setParameter('idClient', $value['numeroClient']);
                // Permet de ne pas tomber en erreur même s'il n'y a pas de résultat //
                $querySageNbImpayes = $qbSageImpayes->getQuery();
                $resultSageNbImpayes = $querySageNbImpayes->getOneOrNullResult();
                if ($resultSageNbImpayes['nbImpayes'] != null){
                $statCommerce->setNbimpayesincident($resultSageNbImpayes['nbImpayes']);
                }else{
                    $statCommerce->setNbimpayesincident(0);
                }

                $emStatsCommerce->persist($statCommerce);
            }
        }
        // Mise à jour dans la table
        $emStatsCommerce->flush();
        // Renvoie vers une page qui se fermera en automatique après la maj
        return $this->render('IFppoCommerceBundle:Stats:indexBis.html.twig');
    }

    /**
     * Calcul du cumul de l'année n-1 à partir d'un mois donnée
     * Cela permettra de définir le % d'évolution par rapport à l'année n-1     
     * @param type   $idClient Identifiant du Client
     * @param String $anneePrec Année précédente
     */
    public function calculCumulCaN1($idClient, $anneePrec) {
        // Connexion à la base de données MYSQL du srv-intranet2
        $emCalculCumul = $this->getDoctrine()->getManager('mySql2');
        $clientHistorique = new Historiquestats();
        $clientHistorique = $emCalculCumul->getRepository('IFppoCommerceBundle:Historiquestats')->findOneBy(array('idclient' => $idClient, 'annee' => $anneePrec));
        $date = new \DateTime;

        if ($clientHistorique == null) {
            // Force le passage dans le default si le client n'a pas fait de commande dans l'historique
            $mois = '20';
        } else {

            $mois = $date->format('m');
        }

        $cumul = 0;

        // Cumul de l'année précédente avec le mois actuel - 1
        switch ($mois) {
            case '01':
                // Janvier                
                $cumul = 0;
                break;
            case '02':
                // Février
                $cumul = $clientHistorique->getJanvier();
                break;
            case '03':
                // Mars
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier();
                break;
            case '04':
                // Avril
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars();
                break;
            case '05':
                // Mai
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars() +
                        $clientHistorique->getAvril();
                break;
            case '06':
                // Juin
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars() +
                        $clientHistorique->getAvril() + $clientHistorique->getMai();
                break;
            case '07':

                // Juillet
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars() +
                        $clientHistorique->getAvril() + $clientHistorique->getMai() + $clientHistorique->getJuin();
                break;
            case '08':
                // Aout
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars() +
                        $clientHistorique->getAvril() + $clientHistorique->getMai() + $clientHistorique->getJuin() +
                        $clientHistorique->getJuillet();
                break;
            case '09':
                // Septembre
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars() +
                        $clientHistorique->getAvril() + $clientHistorique->getMai() + $clientHistorique->getJuin() +
                        $clientHistorique->getJuillet() + $clientHistorique->getAout();
                break;
            case '10':
                // Octobre
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars() +
                        $clientHistorique->getAvril() + $clientHistorique->getMai() + $clientHistorique->getJuin() +
                        $clientHistorique->getJuillet() + $clientHistorique->getAout() + $clientHistorique->getSeptembre();
                break;
            case '11':

                // Novembre
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars() +
                        $clientHistorique->getAvril() + $clientHistorique->getMai() + $clientHistorique->getJuin() +
                        $clientHistorique->getJuillet() + $clientHistorique->getAout() + $clientHistorique->getSeptembre() +
                        $clientHistorique->getOctobre();
                break;
            case '12':
                // Decembre
                $cumul = $clientHistorique->getJanvier() + $clientHistorique->getFevrier() + $clientHistorique->getMars() +
                        $clientHistorique->getAvril() + $clientHistorique->getMai() + $clientHistorique->getJuin() +
                        $clientHistorique->getJuillet() + $clientHistorique->getAout() + $clientHistorique->getSeptembre() +
                        $clientHistorique->getOctobre() + $clientHistorique->getDecembre();
                break;

            default:
                $cumul = 0;
                break;
        }

        return $cumul;
    }

}

?>
