<?php

namespace IFppo\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use SaadTazi\GChartBundle\DataTable;
use IFppo\CommerceBundle\Entity\Commercestats;

/**
 * Description of HistoriqueTradiController
 *
 * @author jeremy.denieul
 */
class HistoriqueTradiController extends Controller {

    public function indexAction() {
        $emStatsCommerce = $this->getDoctrine()->getManager('mySql2');
        $clientsKom = $emStatsCommerce->getRepository('IFppoCommerceBundle:Commercestats')->findBy(array('categorie' => "Traditionnel"), array('nomclient' => 'ASC'));
        return $this->render('IFppoCommerceBundle:Stats:historiqueKomilfo.html.twig', array('clients' => $clientsKom,'komilfo' => 0));
    }

}

?>
