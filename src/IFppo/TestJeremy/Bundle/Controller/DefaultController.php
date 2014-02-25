<?php

namespace IFppo\TestJeremy\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IFppo\PrevisionnelBundle\Entity\TestModifDatatable;

class DefaultController extends Controller {

    public function indexAction() {
        // Connexion à la base de données MYSQL du srv-intranet2
        $emIntranet2 = $this->getDoctrine()->getManager('mySql2');
        $statsTechnique = $emIntranet2->getRepository('IFppoTestJeremyBundle:Entity:TestModifDatatable');
        // Récupère toutes les personnes de la table statstechnique
        $listePersonnes = $statsTechnique->findAll();
        return $this->render('IFppoTestJeremyBundle:Default:index.html.twig', array('listePersonnes' => $listePersonnes));
    }



}
