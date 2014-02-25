<?php

namespace IFppo\ScanProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IFppo\ScanProdBundle\Entity\InfosScan;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // Récupère le code barre
        $recupInfo = $this->formAction();
        $infosScan = new InfosScan();
        // Récupère un tuple de la table info scan via son code barre
        $infosScan = $this->findInfosScan($recupInfo);	                  
        return $this->render('IFppoScanProdBundle:Default:index.html.twig', array('numCodeBarre' => $recupInfo,'infosScan' => $infosScan));        
    }
    
        /**
     * Récupère ce qui a été posté suite à l'appuie du bouton OK
     * @return la date et le mois choisit
     */
    public function formAction() {

        $recupValue = "";
        //Récupération des valeurs de type POST
        $requete = $this->getRequest();
        
        if ($requete->getMethod() == 'POST') {
            $recupValue = $_POST['valeurCodeBarre'];                      
        }else{
            $recupValue = "";
        }        
        return $recupValue;
    }
    
    public function findInfosScan($codeBarre){
        
        //Connexion à CHACAL //
        $emChacal = $this->getDoctrine()->getManager('chacalStat');
        //$entityChacal = $emChacal->getRepository('IFppoScanProdBundle:InfosScan');
        $connection = $emChacal->getConnection();
        $statement = $connection->prepare("SELECT iExemplaire,tCodeBarre,tNomElevation,
            binWmf,iQuantite,tReference1,tNomProjet,IdProjet,iPtrIdElevation FROM InfosScan WHERE tCodeBarre = '".$codeBarre."'");        
        $statement->execute();        
        $results = $statement->fetch();               
        $infosScan = new InfosScan();
        $infosScan->setCodeBarre($results['tCodeBarre']);
        $infosScan->setExemplaire($results['iExemplaire']);
        $infosScan->setIdProjet($results['IdProjet']);
        $infosScan->setImageProfil($results['binWmf']);
        $infosScan->setNomPoste($results['tNomElevation']);
        $infosScan->setNumCommande($results['tNomProjet']);
        $infosScan->setQuantite($results['iQuantite']);
        $infosScan->setReferenceCommande($results['tReference1']);  
        $infosScan->setIdPoste($results['iPtrIdElevation']);

        return $infosScan;       
        
    }
}
