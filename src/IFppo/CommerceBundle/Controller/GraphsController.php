<?php

namespace IFppo\CommerceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SaadTazi\GChartBundle\DataTable;
use IFppo\CommerceBundle\Entity\Commercestats;
/**
 * Description of GraphsController
 *
 * @author jeremy.denieul
 */
class GraphsController extends Controller {

    public function indexAction() {

        //-------------CA par catégorie--------------
        // Connexion à la base de données de l'intranet 2
        $emStatsCommerce = $this->getDoctrine()->getManager('mySql2');
        $statCommerce = $emStatsCommerce->getRepository('IFppoCommerceBundle:Commercestats');
        
        // Récupère le CA des clients komiflo
        $qbCC = $statCommerce->createQueryBuilder('s')
                ->select('SUM(s.can) as sommeKomil')
                ->where('s.categorie = :categorie')
                ->setParameter('categorie', "KOMILFO");
        $queryCC = $qbCC->getQuery();
        $resultCC = $queryCC->getOneOrNullResult();
        
        
        // Récupère le CA des clients traditionnel
        $qbCCTradi = $statCommerce->createQueryBuilder('s')
                ->select('SUM(s.can) as sommeTradi')
                ->where('s.categorie = :categorie')
                ->setParameter('categorie', "TRADITIONNEL");
        $queryCCTradi = $qbCCTradi->getQuery();
        $resultCCTradi = $queryCCTradi->getOneOrNullResult();  
        
        // Récupère le CA des clients komiflo
        $qbCCParticulier = $statCommerce->createQueryBuilder('s')
                ->select('SUM(s.can) as sommeParticulier')
                ->where('s.categorie = :categorie')
                ->setParameter('categorie', "PARTICULIER");
        $queryParticulier = $qbCCParticulier->getQuery();
        $resultParticulier = $queryParticulier->getOneOrNullResult();
        
        
        // Récupère le CA des clients traditionnel
        $qbCCPerso = $statCommerce->createQueryBuilder('s')
                ->select('SUM(s.can) as sommePerso')
                ->where('s.categorie = :categorie')
                ->setParameter('categorie', "PERSONNEL");
        $queryCCPerso = $qbCCPerso->getQuery();
        $resultCCPerso = $queryCCPerso->getOneOrNullResult();                         
        
        $intValueKomilfo = $resultCC['sommeKomil'];
        $intValueTradi = $resultCCTradi['sommeTradi'];
        $intValueParticulier = $resultParticulier['sommeParticulier'];
        $intValuePerso = $resultCCPerso['sommePerso'];        

        
        $dataTable1 = new DataTable\DataTable(
                array(
            'cols' =>
            array(
                array(
                    'id' => 'id1',
                    'label' => 'label1',
                    'type' => 'string'
                ),
                array(
                    'id' => 'id1',
                    'label' => 'label1',
                    'type' => 'string'
                ),
                array(
                    'id' => 'id1',
                    'label' => 'label1',
                    'type' => 'string'
                ),                
                array(
                    'id' => 'id2',
                    'label' => 'label2',
                    'type' => 'number'
                )
            ),
            'rows' =>
            array(
                //row 1
                array(
                    array(
                        'v' => 'Komilfo'
                    ),
                    array(
                        'v' => floatval($intValueKomilfo),
                        'f' => $intValueKomilfo.' €'
                    )
                ),
                //row 2
                array(
                    array(
                        'v' => 'Personnel'
                    ),
                    array(
                        'v' => floatval($intValuePerso),
                        'f' => $intValuePerso.' €'
                    )
                ),
                //row 3
                array(
                    array(
                        'v' => 'Particulier'
                    ),
                    array(
                        'v' => floatval($intValueParticulier),
                        'f' => $intValueParticulier.' €'
                    )
                ),                
                // row 4
                array(
                    array(
                        'v' => 'Traditionnel'
                    ),
                    array(
                        'v' => floatval($intValueTradi),
                        'f' => $intValueTradi.' €'
                    )
                )
            )
                )
        );
        
        //------------- CA PAR TYPE -------------------
        // Récupère le CA des clients komiflo
        $qbCintre = $statCommerce->createQueryBuilder('s')
                ->select('SUM(s.cintrevaleur) as somme');
        $queryCintre = $qbCintre->getQuery();
        $resultCintre = $queryCintre->getOneOrNullResult();
        
        
        // Récupère le CA des clients traditionnel
        $qbCCVision = $statCommerce->createQueryBuilder('s')
                ->select('SUM(s.visionvaleur) as somme');
        $queryCCVision = $qbCCVision->getQuery();
        $resultCCVision = $queryCCVision->getOneOrNullResult();  
        
        // Récupère le CA des clients komiflo
        $qbCCAlu = $statCommerce->createQueryBuilder('s')
                ->select('SUM(s.aluvaleur) as somme');
        $queryAlu = $qbCCAlu->getQuery();
        $resultAlu = $queryAlu->getOneOrNullResult();
        
        
        // Récupère le CA des clients traditionnel
        $qbCCStd = $statCommerce->createQueryBuilder('s')
                ->select('SUM(s.standardvaleur) as somme');
        $queryCCStd = $qbCCStd->getQuery();
        $resultCCStd = $queryCCStd->getOneOrNullResult();                         
        
        $intValueCintre = $resultCintre['somme'];
        $intValueVision = $resultCCVision['somme'];
        $intValueAlu = $resultAlu['somme'];
        $intValueStd = $resultCCStd['somme'];        

        
        $dataTableType = new DataTable\DataTable(
                array(
            'cols' =>
            array(
                array(
                    'id' => 'id1',
                    'label' => 'label1',
                    'type' => 'string'
                ),
                array(
                    'id' => 'id1',
                    'label' => 'label1',
                    'type' => 'string'
                ),
                array(
                    'id' => 'id1',
                    'label' => 'label1',
                    'type' => 'string'
                ),                
                array(
                    'id' => 'id2',
                    'label' => 'label2',
                    'type' => 'number'
                )
            ),
            'rows' =>
            array(
                //row 1
                array(
                    array(
                        'v' => 'Cintré'
                    ),
                    array(
                        'v' => floatval($intValueCintre),
                        'f' => $intValueCintre.' €'
                    )
                ),
                //row 2
                array(
                    array(
                        'v' => 'Vision'
                    ),
                    array(
                        'v' => floatval($intValueVision),
                        'f' => $intValueVision.' €'
                    )
                ),
                //row 3
                array(
                    array(
                        'v' => 'Alu'
                    ),
                    array(
                        'v' => floatval($intValueAlu),
                        'f' => $intValueAlu.' €'
                    )
                ),                
                // row 4
                array(
                    array(
                        'v' => 'Standard'
                    ),
                    array(
                        'v' => floatval($intValueStd),
                        'f' => $intValueStd.' €'
                    )
                )
            )
                )
        );        
        
        //-------------ASSURÉ OU NON --------------
        // Récupère le nb d'assurés
        $qbAss = $statCommerce->createQueryBuilder('s')
                ->select('COUNT(s.identifiant) as nbAss')
                ->where('s.assurancevalid = :ass')
                ->setParameter('ass', "O");
        $queryAss = $qbAss->getQuery();
        $resultAss = $queryAss->getOneOrNullResult();
        
        // Récupère le nb de non-assurés
        $qbNAss= $statCommerce->createQueryBuilder('s')
                ->select('COUNT(s.identifiant) as nbNAss')
                ->where('s.assurancevalid = :ass')
                ->setParameter('ass', "N");
        $queryNAss = $qbNAss->getQuery();
        $resultNAss = $queryNAss->getOneOrNullResult();
        
        $intValAss = $resultAss['nbAss'];
        $intValNAss = $resultNAss['nbNAss'];
        
       $dataTableAssurance = new DataTable\DataTable(
                array(
            'cols' =>
            array(
                array(
                    'id' => 'id1',
                    'label' => 'label1',
                    'type' => 'string'
                ),              
                array(
                    'id' => 'id2',
                    'label' => 'label2',
                    'type' => 'number'
                )
            ),
            'rows' =>
            array(
                //row 1
                array(
                    array(
                        'v' => 'Assuré'
                    ),
                    array(
                        'v' => intval($intValAss),
                        'f' => $intValAss
                    )
                ),
                //row 2              
                array(
                    array(
                        'v' => 'Non assuré'
                    ),
                    array(
                        'v' => intval($intValNAss),
                        'f' => $intValNAss
                    )
                )
            )
                )
        );
       
       // Retourne les 3 graphiques
        return $this->render('IFppoCommerceBundle:Stats:graphs.html.twig', 
            array('dataTable1' => $dataTable1->toArray(),
            'rawDataTable1' => $dataTable1,
            'dataTableType' => $dataTableType->toArray(),
            'rawDataTableType' => $dataTableType,                
            'dataTableAssurance' => $dataTableAssurance->toArray(),
            'rawDataTableAssurance' => $dataTableAssurance));                
    }

}

?>
