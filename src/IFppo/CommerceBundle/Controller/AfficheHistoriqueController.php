<?php

namespace IFppo\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use SaadTazi\GChartBundle\DataTable;
use IFppo\CommerceBundle\Entity\Commercestats;
use Ps\PdfBundle\Annotation\Pdf;

/**
 * Description of AfficheHistoriqueController
 *
 * @author jeremy.denieul
 */
class AfficheHistoriqueController extends Controller {

    public function indexAction($idClient, $komilfo) {

        $emStatsCommerce = $this->getDoctrine()->getManager('mySql2');
        $statCommerce = $emStatsCommerce->getRepository('IFppoCommerceBundle:Historiquestats');
        $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 1);
        $recupAnneePrecendente = date('Y', $startTime);
        $startTime2 = mktime(0, 0, 0, 1, 1, date('Y') - 2);
        $recupAnneePrecendente2 = date('Y', $startTime2);
        $date = new \DateTime;
        $recupAnnee = $date->format('Y');

        $qbKomilfo = $statCommerce->createQueryBuilder('s')
                ->select('s.idclient, s.janvier, s.fevrier, s.mars, s.avril, s.mai, s.juin, s.juillet, s.aout, s.septembre, s.octobre, s.novembre, s.decembre')
                ->where('s.annee = :anneePrec')
                ->setParameter('anneePrec', $recupAnneePrecendente)
                ->andWhere('s.idclient = :id')
                ->setParameter('id', $idClient);
        $queryKomilfo = $qbKomilfo->getQuery();
        $resultKomilfo = $queryKomilfo->getOneOrNullResult();

        $qbKomilfoN = $statCommerce->createQueryBuilder('s')
                ->select('s.idclient, s.janvier, s.fevrier, s.mars, s.avril, s.mai, s.juin, s.juillet, s.aout, s.septembre, s.octobre, s.novembre, s.decembre')
                ->where('s.annee = :anneePrec')
                ->setParameter('anneePrec', $recupAnnee)
                ->andWhere('s.idclient = :id')
                ->setParameter('id', $idClient);
        $queryKomilfoN = $qbKomilfoN->getQuery();
        $resultKomilfoN = $queryKomilfoN->getOneOrNullResult();
        
        $qbKomilfoN2 = $statCommerce->createQueryBuilder('s')
                ->select('s.idclient, s.janvier, s.fevrier, s.mars, s.avril, s.mai, s.juin, s.juillet, s.aout, s.septembre, s.octobre, s.novembre, s.decembre')
                ->where('s.annee = :anneePrec')
                ->setParameter('anneePrec', $recupAnneePrecendente2)
                ->andWhere('s.idclient = :id')
                ->setParameter('id', $idClient);
        $queryKomilfoN2 = $qbKomilfoN2->getQuery();
        $resultKomilfoN2 = $queryKomilfoN2->getOneOrNullResult();        


        $dataTable2 = new DataTable\DataTable();
        $dataTable2->addColumn('id1', 'label 1', 'string');
        $dataTable2->addColumnObject(new DataTable\DataColumn('id2', '2012', 'number'));
        $dataTable2->addColumnObject(new DataTable\DataColumn('id3', '2013', 'number'));
        $dataTable2->addColumnObject(new DataTable\DataColumn('id4', '2014', 'number'));

        // Année n - 2
        $intValue12011 = $resultKomilfoN2['janvier'];
        $intValue22011 = $resultKomilfoN2['fevrier'];
        $intValue32011 = $resultKomilfoN2['mars'];
        $intValue42011 = $resultKomilfoN2['avril'];
        $intValue52011 = $resultKomilfoN2['mai'];
        $intValue62011 = $resultKomilfoN2['juin'];
        $intValue72011 = $resultKomilfoN2['juillet'];
        $intValue82011 = $resultKomilfoN2['aout'];
        $intValue92011 = $resultKomilfoN2['septembre'];
        $intValue102011 = $resultKomilfoN2['octobre'];
        $intValue112011 = $resultKomilfoN2['novembre'];
        $intValue122011 = $resultKomilfoN2['decembre'];
        
        $total2011 = floatval($intValue12011 + $intValue22011 + $intValue32011 + $intValue42011 + $intValue52011 
                + $intValue62011 + $intValue72011 + $intValue82011 + $intValue92011 
                + $intValue102011 + $intValue112011 + $intValue122011);
        
        // Année n - 1
        $intValue12012 = $resultKomilfo['janvier'];
        $intValue22012 = $resultKomilfo['fevrier'];
        $intValue32012 = $resultKomilfo['mars'];
        $intValue42012 = $resultKomilfo['avril'];
        $intValue52012 = $resultKomilfo['mai'];
        $intValue62012 = $resultKomilfo['juin'];
        $intValue72012 = $resultKomilfo['juillet'];
        $intValue82012 = $resultKomilfo['aout'];
        $intValue92012 = $resultKomilfo['septembre'];
        $intValue102012 = $resultKomilfo['octobre'];
        $intValue112012 = $resultKomilfo['novembre'];
        $intValue122012 = $resultKomilfo['decembre'];

        $total2012 = floatval($intValue12012 + $intValue22012 + $intValue32012 + $intValue42012 +
                $intValue52012 + $intValue62012 + $intValue72012 + $intValue82012 
                + $intValue92012 + $intValue102012 + $intValue112012 + $intValue122012);
        // Année n
        $intValue12013 = $resultKomilfoN['janvier'];
        $intValue22013 = $resultKomilfoN['fevrier'];
        $intValue32013 = $resultKomilfoN['mars'];
        $intValue42013 = $resultKomilfoN['avril'];
        $intValue52013 = $resultKomilfoN['mai'];
        $intValue62013 = $resultKomilfoN['juin'];
        $intValue72013 = $resultKomilfoN['juillet'];
        $intValue82013 = $resultKomilfoN['aout'];
        $intValue92013 = $resultKomilfoN['septembre'];
        $intValue102013 = $resultKomilfoN['octobre'];
        $intValue112013 = $resultKomilfoN['novembre'];
        $intValue122013 = $resultKomilfoN['decembre'];

        $total2013 = floatval($intValue12013 + $intValue22013 + $intValue32013 
                + $intValue42013 + $intValue52013 + $intValue62013 
                + $intValue72013 + $intValue82013 + $intValue92013 
                + $intValue102013 + $intValue112013 + $intValue122013);
        
        //test cells as array
        $dataTable2->addRow(array(
            array('v' => 'Janvier'),
            array('v' => floatval($intValue12011), 'f' => $intValue12011),
            array('v' => floatval($intValue12012), 'f' => $intValue12012),
            array('v' => floatval($intValue12013), 'f' => $intValue12013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Février'),
            array('v' => floatval($intValue22011), 'f' => $intValue22011),
            array('v' => floatval($intValue22012), 'f' => $intValue22012),
            array('v' => floatval($intValue22013), 'f' => $intValue22013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Mars'),
            array('v' => floatval($intValue32011), 'f' => $intValue32011),
            array('v' => floatval($intValue32012), 'f' => $intValue32012),
            array('v' => floatval($intValue32013), 'f' => $intValue32013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Avril'),
            array('v' => floatval($intValue42011), 'f' => $intValue42011),
            array('v' => floatval($intValue42012), 'f' => $intValue42012),
            array('v' => floatval($intValue42013), 'f' => $intValue42013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Mai'),
            array('v' => floatval($intValue52011), 'f' => $intValue52011),
            array('v' => floatval($intValue52012), 'f' => $intValue52012),
            array('v' => floatval($intValue52013), 'f' => $intValue52013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Juin'),
            array('v' => floatval($intValue62011), 'f' => $intValue62011),
            array('v' => floatval($intValue62012), 'f' => $intValue62012),
            array('v' => floatval($intValue62013), 'f' => $intValue62013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Juillet'),
            array('v' => floatval($intValue72011), 'f' => $intValue72011),
            array('v' => floatval($intValue72012), 'f' => $intValue72012),
            array('v' => floatval($intValue72013), 'f' => $intValue72013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Août'),
            array('v' => floatval($intValue82011), 'f' => $intValue82011),
            array('v' => floatval($intValue82012), 'f' => $intValue82012),
            array('v' => floatval($intValue82013), 'f' => $intValue82013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Septembre'),
            array('v' => floatval($intValue92011), 'f' => $intValue92011),
            array('v' => floatval($intValue92012), 'f' => $intValue92012),
            array('v' => floatval($intValue92013), 'f' => $intValue92013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Octobre'),
            array('v' => floatval($intValue102011), 'f' => $intValue102011),
            array('v' => floatval($intValue102012), 'f' => $intValue102012),
            array('v' => floatval($intValue102013), 'f' => $intValue102013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Novembre'),
            array('v' => floatval($intValue112011), 'f' => $intValue112011),
            array('v' => floatval($intValue112012), 'f' => $intValue112012),
            array('v' => floatval($intValue112013), 'f' => $intValue112013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Décembre'),
            array('v' => floatval($intValue122011), 'f' => $intValue122011),
            array('v' => floatval($intValue122012), 'f' => $intValue122012),
            array('v' => floatval($intValue122013), 'f' => $intValue122013)
            
        ));

        $clientsKom = $emStatsCommerce->getRepository('IFppoCommerceBundle:Commercestats')->findOneBy(array('idclient' => $idClient));
        // Récupère l'année n-2
        $startTime2 = mktime(0, 0, 0, 1, 1, date('Y') - 2);
        $recupAnneePrecendente2 = date('Y', $startTime2);
        // Récupère l'année n-1
        $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 1);
        $recupAnneePrecendente = date('Y', $startTime);
        // Récupère l'année n
        $date = new \DateTime;
        $recupAnnee = $date->format('Y');

        // Récupère l'historique des années N , N-1 et N-2
        $anneeN = $this->recupHistorique($recupAnnee, $idClient);
        $anneeN1 = $this->recupHistorique($recupAnneePrecendente, $idClient);
        $anneeN2 = $this->recupHistorique($recupAnneePrecendente2, $idClient);
        
        return $this->render('IFppoCommerceBundle:Stats:afficheHistorique.html.twig', array('dataTable2' => $dataTable2->toArray(),
                    'anneeN' => $anneeN,
                    'anneeN1' => $anneeN1,
                    'anneeN2' => $anneeN2,
                    'infosClient' => $clientsKom,
                    'total2011' => $total2011,
                    'total2012' => $total2012,
                    'total2013' => $total2013,
                    'komilfo' => $komilfo));
    }

    /**
     * Récupère l'historique d'un client pour une date donnée
     * @param type $annee
     * @param type $idClient
     * @return type Historiquestats
     */
    public function recupHistorique($annee, $idClient) {

        // Connexion à la base de données
        $emStatsCommerce = $this->getDoctrine()->getManager('mySql2');
        // Récupère le repository Historiquestats
        $statCommerce = $emStatsCommerce->getRepository('IFppoCommerceBundle:Historiquestats');
        $qbKomilfo = $statCommerce->createQueryBuilder('s')
                ->select('s.idclient, s.janvier, s.fevrier, s.mars, s.avril, s.mai, s.juin, s.juillet, s.aout, s.septembre, s.octobre, s.novembre, s.decembre')
                ->where('s.annee = :anneePrec')
                ->setParameter('anneePrec', $annee)
                ->andWhere('s.idclient = :id')
                ->setParameter('id', $idClient);
        $queryKomilfo = $qbKomilfo->getQuery();
        $resultKomilfo = $queryKomilfo->getOneOrNullResult();

        return $resultKomilfo;
    }

    public function exportPdfHistoriqueAction($idClient, $komilfo) {

        $emStatsCommerce = $this->getDoctrine()->getManager('mySql2');
        $statCommerce = $emStatsCommerce->getRepository('IFppoCommerceBundle:Historiquestats');
        $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 1);
        $recupAnneePrecendente = date('Y', $startTime);
        $startTime2 = mktime(0, 0, 0, 1, 1, date('Y') - 2);
        $recupAnneePrecendente2 = date('Y', $startTime2);
        $date = new \DateTime;
        $recupAnnee = $date->format('Y');

        $qbKomilfo = $statCommerce->createQueryBuilder('s')
                ->select('s.idclient, s.janvier, s.fevrier, s.mars, s.avril, s.mai, s.juin, s.juillet, s.aout, s.septembre, s.octobre, s.novembre, s.decembre')
                ->where('s.annee = :anneePrec')
                ->setParameter('anneePrec', $recupAnneePrecendente)
                ->andWhere('s.idclient = :id')
                ->setParameter('id', $idClient);
        $queryKomilfo = $qbKomilfo->getQuery();
        $resultKomilfo = $queryKomilfo->getOneOrNullResult();

        $qbKomilfoN = $statCommerce->createQueryBuilder('s')
                ->select('s.idclient, s.janvier, s.fevrier, s.mars, s.avril, s.mai, s.juin, s.juillet, s.aout, s.septembre, s.octobre, s.novembre, s.decembre')
                ->where('s.annee = :anneePrec')
                ->setParameter('anneePrec', $recupAnnee)
                ->andWhere('s.idclient = :id')
                ->setParameter('id', $idClient);
        $queryKomilfoN = $qbKomilfoN->getQuery();
        $resultKomilfoN = $queryKomilfoN->getOneOrNullResult();
        
        $qbKomilfoN2 = $statCommerce->createQueryBuilder('s')
                ->select('s.idclient, s.janvier, s.fevrier, s.mars, s.avril, s.mai, s.juin, s.juillet, s.aout, s.septembre, s.octobre, s.novembre, s.decembre')
                ->where('s.annee = :anneePrec')
                ->setParameter('anneePrec', $recupAnneePrecendente2)
                ->andWhere('s.idclient = :id')
                ->setParameter('id', $idClient);
        $queryKomilfoN2 = $qbKomilfoN2->getQuery();
        $resultKomilfoN2 = $queryKomilfoN2->getOneOrNullResult();        


        $dataTable2 = new DataTable\DataTable();
        $dataTable2->addColumn('id1', 'label 1', 'string');
        $dataTable2->addColumnObject(new DataTable\DataColumn('id2', '2012', 'number'));
        $dataTable2->addColumnObject(new DataTable\DataColumn('id3', '2013', 'number'));
        $dataTable2->addColumnObject(new DataTable\DataColumn('id4', '2014', 'number'));

        // Année n - 2
        $intValue12011 = $resultKomilfoN2['janvier'];
        $intValue22011 = $resultKomilfoN2['fevrier'];
        $intValue32011 = $resultKomilfoN2['mars'];
        $intValue42011 = $resultKomilfoN2['avril'];
        $intValue52011 = $resultKomilfoN2['mai'];
        $intValue62011 = $resultKomilfoN2['juin'];
        $intValue72011 = $resultKomilfoN2['juillet'];
        $intValue82011 = $resultKomilfoN2['aout'];
        $intValue92011 = $resultKomilfoN2['septembre'];
        $intValue102011 = $resultKomilfoN2['octobre'];
        $intValue112011 = $resultKomilfoN2['novembre'];
        $intValue122011 = $resultKomilfoN2['decembre'];
        
        $total2011 = floatval($intValue12011 + $intValue22011 + $intValue32011 + $intValue42011 + $intValue52011 
                + $intValue62011 + $intValue72011 + $intValue82011 + $intValue92011 
                + $intValue102011 + $intValue112011 + $intValue122011);
        
        // Année n - 1
        $intValue12012 = $resultKomilfo['janvier'];
        $intValue22012 = $resultKomilfo['fevrier'];
        $intValue32012 = $resultKomilfo['mars'];
        $intValue42012 = $resultKomilfo['avril'];
        $intValue52012 = $resultKomilfo['mai'];
        $intValue62012 = $resultKomilfo['juin'];
        $intValue72012 = $resultKomilfo['juillet'];
        $intValue82012 = $resultKomilfo['aout'];
        $intValue92012 = $resultKomilfo['septembre'];
        $intValue102012 = $resultKomilfo['octobre'];
        $intValue112012 = $resultKomilfo['novembre'];
        $intValue122012 = $resultKomilfo['decembre'];

        $total2012 = floatval($intValue12012 + $intValue22012 + $intValue32012 + $intValue42012 +
                $intValue52012 + $intValue62012 + $intValue72012 + $intValue82012 
                + $intValue92012 + $intValue102012 + $intValue112012 + $intValue122012);
        // Année n
        $intValue12013 = $resultKomilfoN['janvier'];
        $intValue22013 = $resultKomilfoN['fevrier'];
        $intValue32013 = $resultKomilfoN['mars'];
        $intValue42013 = $resultKomilfoN['avril'];
        $intValue52013 = $resultKomilfoN['mai'];
        $intValue62013 = $resultKomilfoN['juin'];
        $intValue72013 = $resultKomilfoN['juillet'];
        $intValue82013 = $resultKomilfoN['aout'];
        $intValue92013 = $resultKomilfoN['septembre'];
        $intValue102013 = $resultKomilfoN['octobre'];
        $intValue112013 = $resultKomilfoN['novembre'];
        $intValue122013 = $resultKomilfoN['decembre'];

        $total2013 = floatval($intValue12013 + $intValue22013 + $intValue32013 
                + $intValue42013 + $intValue52013 + $intValue62013 
                + $intValue72013 + $intValue82013 + $intValue92013 
                + $intValue102013 + $intValue112013 + $intValue122013);
        
        //test cells as array
        $dataTable2->addRow(array(
            array('v' => 'Janvier'),
            array('v' => floatval($intValue12011), 'f' => $intValue12011),
            array('v' => floatval($intValue12012), 'f' => $intValue12012),
            array('v' => floatval($intValue12013), 'f' => $intValue12013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Février'),
            array('v' => floatval($intValue22011), 'f' => $intValue22011),
            array('v' => floatval($intValue22012), 'f' => $intValue22012),
            array('v' => floatval($intValue22013), 'f' => $intValue22013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Mars'),
            array('v' => floatval($intValue32011), 'f' => $intValue32011),
            array('v' => floatval($intValue32012), 'f' => $intValue32012),
            array('v' => floatval($intValue32013), 'f' => $intValue32013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Avril'),
            array('v' => floatval($intValue42011), 'f' => $intValue42011),
            array('v' => floatval($intValue42012), 'f' => $intValue42012),
            array('v' => floatval($intValue42013), 'f' => $intValue42013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Mai'),
            array('v' => floatval($intValue52011), 'f' => $intValue52011),
            array('v' => floatval($intValue52012), 'f' => $intValue52012),
            array('v' => floatval($intValue52013), 'f' => $intValue52013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Juin'),
            array('v' => floatval($intValue62011), 'f' => $intValue62011),
            array('v' => floatval($intValue62012), 'f' => $intValue62012),
            array('v' => floatval($intValue62013), 'f' => $intValue62013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Juillet'),
            array('v' => floatval($intValue72011), 'f' => $intValue72011),
            array('v' => floatval($intValue72012), 'f' => $intValue72012),
            array('v' => floatval($intValue72013), 'f' => $intValue72013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Août'),
            array('v' => floatval($intValue82011), 'f' => $intValue82011),
            array('v' => floatval($intValue82012), 'f' => $intValue82012),
            array('v' => floatval($intValue82013), 'f' => $intValue82013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Septembre'),
            array('v' => floatval($intValue92011), 'f' => $intValue92011),
            array('v' => floatval($intValue92012), 'f' => $intValue92012),
            array('v' => floatval($intValue92013), 'f' => $intValue92013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Octobre'),
            array('v' => floatval($intValue102011), 'f' => $intValue102011),
            array('v' => floatval($intValue102012), 'f' => $intValue102012),
            array('v' => floatval($intValue102013), 'f' => $intValue102013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Novembre'),
            array('v' => floatval($intValue112011), 'f' => $intValue112011),
            array('v' => floatval($intValue112012), 'f' => $intValue112012),
            array('v' => floatval($intValue112013), 'f' => $intValue112013)
            
        ));
        $dataTable2->addRow(array(
            array('v' => 'Décembre'),
            array('v' => floatval($intValue122011), 'f' => $intValue122011),
            array('v' => floatval($intValue122012), 'f' => $intValue122012),
            array('v' => floatval($intValue122013), 'f' => $intValue122013)
            
        ));

        $clientsKom = $emStatsCommerce->getRepository('IFppoCommerceBundle:Commercestats')->findOneBy(array('idclient' => $idClient));
        // Récupère l'année n-2
        $startTime2 = mktime(0, 0, 0, 1, 1, date('Y') - 2);
        $recupAnneePrecendente2 = date('Y', $startTime2);
        // Récupère l'année n-1
        $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 1);
        $recupAnneePrecendente = date('Y', $startTime);
        // Récupère l'année n
        $date = new \DateTime;
        $recupAnnee = $date->format('Y');

        // Récupère l'historique des années N , N-1 et N-2
        $anneeN = $this->recupHistorique($recupAnnee, $idClient);
        $anneeN1 = $this->recupHistorique($recupAnneePrecendente, $idClient);
        $anneeN2 = $this->recupHistorique($recupAnneePrecendente2, $idClient);

        $html = $this->render('IFppoCommerceBundle:Stats:afficheHistorique.html.twig', array('dataTable2' => $dataTable2->toArray(),
                    'anneeN' => $anneeN,
                    'anneeN1' => $anneeN1,
                    'anneeN2' => $anneeN2,
                    'infosClient' => $clientsKom,
                    'total2011' => $total2011,
                    'total2012' => $total2012,
                    'total2013' => $total2013,
                    'komilfo' => $komilfo));
        
        $response = new Response();
        $response->setContent($this->get('knp_snappy.pdf')->getOutputFromHtml($html, array('orientation' => 'Landscape')));
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Type: application/pdf', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename=' . $clientsKom->getIdClient() . '.pdf');

        return $response;
    }

}

?>
