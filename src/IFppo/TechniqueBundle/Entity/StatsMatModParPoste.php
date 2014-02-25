<?php

namespace IFppo\TechniqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of StatsMatModParPoste
 *
 * @author jeremy.denieul
 */
class StatsMatModParPoste {
    
    private $ptrIdProjet;
    private $idElevation;
    private $moFab;
    private $moPose;
    private $moPoseRemp;
    private $moPoseVolet;
    private $matModPrixCalcule;
    private $matModPrixCalculeVolet;
    private $prixImpose;
    private $prixTarif;




    public function getPtrIdProjet() {
        return $this->ptrIdProjet;
    }

    public function setPtrIdProjet($ptrIdProjet) {
        $this->ptrIdProjet = $ptrIdProjet;
    }

    public function getIdElevation() {
        return $this->idElevation;
    }

    public function setIdElevation($idElevation) {
        $this->idElevation = $idElevation;
    }

    public function getMoFab() {
        return $this->moFab;
    }

    public function setMoFab($moFab) {
        $this->moFab = $moFab;
    }

    public function getMoPoste() {
        return $this->moPose;
    }

    public function setMoPoste($moPoste) {
        $this->moPose = $moPoste;
    }

    public function getMoPoseRemp() {
        return $this->moPoseRemp;
    }

    public function setMoPoseRemp($moPoseRemp) {
        $this->moPoseRemp = $moPoseRemp;
    }

    public function getMoPosteVolet() {
        return $this->moPoseVolet;
    }

    public function setMoPosteVolet($moPosteVolet) {
        $this->moPoseVolet = $moPosteVolet;
    }

    public function getMatModPrixCalcule() {
        return $this->matModPrixCalcule;
    }

    public function setMatModPrixCalcule($matModPrixCalcule) {
        $this->matModPrixCalcule = $matModPrixCalcule;
    }

    public function getMatModPrixCalculeVolet() {
        return $this->matModPrixCalculeVolet;
    }

    public function setMatModPrixCalculeVolet($matModPrixCalculeVolet) {
        $this->matModPrixCalculeVolet = $matModPrixCalculeVolet;
    }
    
    public function getPrixImpose() {
        return $this->prixImpose;
    }

    public function setPrixImpose($prixImpose) {
        $this->prixImpose = $prixImpose;
    }

    public function getPrixTarif() {
        return $this->prixTarif;
    }

    public function setPrixTarif($prixTarif) {
        $this->prixTarif = $prixTarif;
    }




}

?>
