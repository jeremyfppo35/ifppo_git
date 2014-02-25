<?php

namespace IFppo\TechniqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use IFppo\TechniqueBundle\Entity\StatsTechnique;

class StatsMatModController extends Controller {

    public function indexAction() {

        $this->formAction();
        $this->_datatable();
        return $this->render('IFppoTechniqueBundle:Stats:statsMatMod.html.twig');
    }

    /**
     * Récupère ce qui a été posté suite à l'appuie du bouton OK
     * @return la date et le mois choisit
     */
    public function formAction() {

        //Récupération des valeurs de type POST
        $requete = $this->get('request');
        if ($requete->getMethod() == 'POST') {
            $session = $this->getRequest()->getSession();                   
            $mois = "";
            $annee = "";
            if ($_POST['choixMois'] != "" && isset($_POST['choixMois'])) {
                $recupMoisAnnee = $_POST['choixMois'];
                $recupFormat = explode("-", $recupMoisAnnee);
                $mois = $recupFormat[1];
                $annee = $recupFormat[0];                
            } else {
                $date = new \DateTime;
                $mois = $date->format('m');
                $annee = $date->format('Y');
            }
            $session->set('recupDate', $annee . "-" . $mois . "%");            
        }
    }

    /**
     * set datatable configs
     * 
     * @return \Ali\DatatableBundle\Util\Datatable
     */
    private function _datatable() {
        
        $recupSessionValueDate = $this->get("session");        
        $recupValueDate = $recupSessionValueDate->get('recupDate');        
        $value = 1;
        return $this->get('datatable')
                        ->setDatatableId('statsTechnique')
                        ->setEntity("IFppoTechniqueBundle:StatsTechnique", "s")
                        ->setFields(
                                array(
                                    "Num commande" => 's.numeroCommande',
                                    "Date" => 's.dateFacture',
                                    "Poste" => 's.poste',
                                    "Qté" => 's.quantite',                                                                       
                                    "Qté U" => 's.quantiteU',   
                                    "Mat-Mod U" => 's.matModU',
                                    "Mat U" => 's.matU',
                                    "Mod U" => 's.modU',
                                    "Prix forcé U" => 's.prixSaisiUni',
                                    "Tarif U" => 's.tarifUnitaire',
                                    "Rapport" => 's.rapport',
                                    "Remise" => 's.remise',
                                    "Tarif U Remisé" => 's.tarifUnitaireRem',
                                    "Gamme" => 's.categorie',
                                    "Genre" => 's.genre',
                                    "Type Chassis" => 's.typeChassis',
                                    "Couleur" => 's.couleur',
                                    "Client" => 's.nomClient',
                                    "Options" => 's.options',
                                    "Dimensions" => 's.dimensions',
                                    "Remplissage" => 's.remplissage',
                                    "Volets" => 's.volets',                                    
                                    "_identifier_" => 's.identifiant')
                        )
                        ->setWhere(
                                's.dateFacture LIKE :anneeMois', array('anneeMois' => $recupValueDate)
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
