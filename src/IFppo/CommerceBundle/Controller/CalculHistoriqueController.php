<?php

namespace IFppo\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IFppo\CommerceBundle\Entity\Historiquestats;

/**
 * Description of CalculHistoriqueController
 *
 * @author jeremy.denieul
 */
class CalculHistoriqueController extends Controller {

    public function indexAction() {

        // Connexion à la base de données MYSQL du srv-intranet2
        $emStatsCommerce = $this->getDoctrine()->getManager('mySql2');
        $entity = $emStatsCommerce->getRepository('IFppoCommerceBundle:Commercestats');

        // Récupère tout les clients
        $qb = $entity->createQueryBuilder('c')
                ->select('c.idclient', 'c.nomclient');
        $query = $qb->getQuery();
        $result = $query->getResult();
        $date = new \DateTime;
        $recupAnnee = $date->format('Y');
        $recupMois = $date->format('m');
        //$recupMois = '12';
        //$recupAnnee = '2012';
        foreach ($result as $value) {

            $historiqueCommerce = $emStatsCommerce->getRepository('IFppoCommerceBundle:Historiquestats')->findOneBy(array('idclient' => $value['idclient'], 'annee' => $recupAnnee));
            // S'il n'y a pas de résultat, le créer
            if (!$historiqueCommerce) {
                $historiqueCommerce = new Historiquestats();
                $historiqueCommerce->setIdclient($value['idclient']);
                $historiqueCommerce->setAnnee($recupAnnee);
            }

            // Selon le mois
            switch ($recupMois) {
                case '01':
                    // Janvier
                    $janvier = $this->moisCa("01", $recupAnnee, $value['idclient'], $value['nomclient']);
                    if ($janvier == null) {
                        $historiqueCommerce->setJanvier(0);
                    } else {
                        $historiqueCommerce->setJanvier($janvier);
                    }

                    break;
                case '02':
                    // Février
                    $fevrier = $this->moisCa("02", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($fevrier == null) {
                        $historiqueCommerce->setFevrier(0);
                    } else {
                        $historiqueCommerce->setFevrier($fevrier);
                    }
                    break;
                case '03':
                    // Mars
                    $mars = $this->moisCa("03", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($mars == null) {
                        $historiqueCommerce->setMars(0);
                    } else {
                        $historiqueCommerce->setMars($mars);
                    }
                    break;
                case '04':

                    // Avril
                    $avril = $this->moisCa("04", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($avril == null) {
                        $historiqueCommerce->setAvril(0);
                    } else {
                        $historiqueCommerce->setAvril($avril);
                    }
                    break;
                case '05':
                    // Mai
                    $mai = $this->moisCa("05", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($mai == null) {
                        $historiqueCommerce->setMai(0);
                    } else {
                        $historiqueCommerce->setMai($mai);
                    }
                    break;
                case '06':
                    // Juin
                    $juin = $this->moisCa("06", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($juin == null) {
                        $historiqueCommerce->setJuin(0);
                    } else {
                        $historiqueCommerce->setJuin($juin);
                    }
                    break;
                case '07':

                    // Juillet
                    $juillet = $this->moisCa("07", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($juillet == null) {
                        $historiqueCommerce->setJuillet(0);
                    } else {
                        $historiqueCommerce->setJuillet($juillet);
                    }
                    break;
                case '08':
                    // Aout
                    $aout = $this->moisCa("08", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($aout == null) {
                        $historiqueCommerce->setAout(0);
                    } else {
                        $historiqueCommerce->setAout($aout);
                    }
                    break;
                case '09':
                    // Septembre
                    $septembre = $this->moisCa("09", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($septembre == null) {
                        $historiqueCommerce->setSeptembre(0);
                    } else {
                        $historiqueCommerce->setSeptembre($septembre);
                    }
                    break;
                case '10':
                    // Octobre
                    $octobre = $this->moisCa("10", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($octobre == null) {
                        $historiqueCommerce->setOctobre(0);
                    } else {
                        $historiqueCommerce->setOctobre($octobre);
                    }
                    break;
                case '11':

                    // Novembre
                    $novembre = $this->moisCa("11", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($novembre == null) {
                        $historiqueCommerce->setNovembre(0);
                    } else {
                        $historiqueCommerce->setNovembre($novembre);
                    }
                    break;
                case '12':
                    // Decembre
                    $decembre = $this->moisCa("12", $recupAnnee, $value['idclient'], $value['nomclient']);

                    if ($decembre == null) {
                        $historiqueCommerce->setDecembre(0);
                    } else {
                        $historiqueCommerce->setDecembre($decembre);
                    }
                    break;
                default:
                    break;
            }


            $emStatsCommerce->persist($historiqueCommerce);
            $emStatsCommerce->flush();
        }

        return $this->render('IFppoCommerceBundle:Stats:indexHistorique.html.twig');
    }

    /**
     * Calcul du CA selon :
     * @param type $mois
     * @param type $annee
     * @param type $numClient
     * @return type
     */
    private function moisCa($mois, $annee, $numClient) {

        // Connexion sur la base de données MYSQL
        $em = $this->getDoctrine()->getManager('default');
        $entitiesFacturation = $em->getRepository('IFppoCommerceBundle:FacturationCommande');
        // CA
        $qb = $entitiesFacturation->createQueryBuilder('f')
                ->select('SUM(f.montantTotalHt) as somme')
                ->where('f.dateFacture LIKE :recupAnnee')
                ->setParameter('recupAnnee', '%' . $mois . '-' . $annee . '%')
                ->andWhere('f.numeroClient = :numClient')
                ->setParameter('numClient', $numClient);
        $query = $qb->getQuery();
        $result = $query->getOneOrNullResult();

        // Proforma
        $qbProforma = $entitiesFacturation->createQueryBuilder('f')
                ->select('SUM(f.montantTotalHt) as somme')
                ->where('f.dateFacture LIKE :recupAnnee')
                ->setParameter('recupAnnee', '%' . $mois . '-' . $annee . '%')
                ->andWhere('f.numeroClient = :numClient')
                ->setParameter('numClient', $numClient)
                ->andWhere('f.proforma = :proforma')
                ->setParameter('proforma', 1);
        $queryProforma = $qbProforma->getQuery();
        $resultProforma = $queryProforma->getOneOrNullResult();
        
        // Retourne la somme du CA dans : un mois donnée, une année donnée et un client donnée
        return $result['somme'] - $resultProforma['somme'];
    }

}

?>
