<?php

namespace IFppo\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AccueilController
 *
 * @author jeremy.denieul
 */
class AccueilController extends Controller {
    
    /**
     * Action au chargement de la page
     * @return type
     */
    public function indexAction(){       
        
        return $this->render('IFppoMenuBundle:Accueil:index.html.twig'); 
    }
}

?>
