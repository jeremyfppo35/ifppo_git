<?php

namespace IFppo\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {        
        return $this->render('IFppoUtilisateurBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
}
