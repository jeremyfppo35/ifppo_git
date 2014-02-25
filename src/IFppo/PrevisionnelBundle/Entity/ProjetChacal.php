<?php

namespace IFppo\PrevisionnelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of ProjetChacal
 *
 * @author jeremy.denieul
 */
class ProjetChacal {
    
    private $idProjet;
    private $numCommande;
    private $etat;
    private $dateCreation;
    
    public function getIdProjet() {
        return $this->idProjet;
    }

    public function setIdProjet($idProjet) {
        $this->idProjet = $idProjet;
    }

    public function getNumCommande() {
        return $this->numCommande;
    }

    public function setNumCommande($numCommande) {
        $this->numCommande = $numCommande;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;
    }
}

?>
