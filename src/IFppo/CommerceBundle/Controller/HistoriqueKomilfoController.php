<?php

namespace IFppo\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use SaadTazi\GChartBundle\DataTable;
use IFppo\CommerceBundle\Entity\Commercestats;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HistoriqueController
 *
 * @author jeremy.denieul
 */
class HistoriqueKomilfoController extends Controller {

    public function indexAction() {
        $emStatsCommerce = $this->getDoctrine()->getManager('mySql2');
        $clientsKom = $emStatsCommerce->getRepository('IFppoCommerceBundle:Commercestats')->findBy(array('categorie' => "Komilfo"), array('nomclient' => 'ASC'));    
        return $this->render('IFppoCommerceBundle:Stats:historiqueKomilfo.html.twig', array('clients' => $clientsKom,'komilfo' => 1));
    }   

}

?>
