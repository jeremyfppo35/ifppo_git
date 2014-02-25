<?php

namespace IFppo\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller {

    public function indexAction() {        
        $this->_datatable(); 
        return $this->render('IFppoCommerceBundle:Stats:index.html.twig'); 
    }

    /**
     * set datatable configs
     * 
     * @return \Ali\DatatableBundle\Util\Datatable
     */
    private function _datatable() {
        return $this->get('datatable')
                        ->setDatatableId('statsCommerce')
                        ->setEntity("IFppoCommerceBundle:Commercestats", "s")
                        ->setFields(
                                array(
                                    "CC" => 's.codecommercial',                                    
                                    "Dpt" => 's.codepostal',
                                    "Ouverture compte" => 's.ouverturecompte',
                                    "Assurance" => 's.assurancevalid',  
                                    "Categorie" => 's.categorie',
                                    "Client" => 's.nomclient',
                                    "CA N - 1" => 's.can1',
                                    "CA N" => 's.can',
                                    "Progression (%)" => 's.progressionpourcentage',                                    
                                    "Progression (Val)" => 's.progressionvaleur',
                                    "Prix Public" => 's.prixpublic',
                                    "Indice" => 's.indice',
                                    "Remise" => 's.remise', 
                                    "Remise réelle" => 's.remisereelle',                                    
                                    "Standard (Val)" => 's.standardvaleur',
                                    "Nb chassis Standard (PVC rectangulaire)" => 's.nbchassisstandard',
                                    "Cintre (Val)" => 's.cintrevaleur',
                                    "Nb chassis cintre" => 's.nbchassiscintre',
                                    "Vision (Val)" => 's.visionvaleur',
                                    "Nb chassis vision" => 's.nbchassisvision',
                                    "Alu (Val)" => 's.aluvaleur',
                                    "Nb chassis alu" => 's.nbchassisalu',
                                    "Divers" => 's.divers',                                         
                                    "Futurol" => 's.futurol',
                                    "Divers avoirs" => 's.diversavoirs',  
                                    "Nb impayés / incident" => 's.nbimpayesincident',
                                    "Operation speciales/gains" => 's.operationspecialesgains', 
                                    "Proforma" => 's.proforma',
                                    "Frais tps" => 's.fraisTransport',                                    
                                    "_identifier_" => 's.idclient')  
                        )
                       ->setSearch(true);
    }

    /**
     * Grid action
     * @return Response
     */
    public function gridAction() {
        return $this->_datatable()->execute();
    }  
}
?>
