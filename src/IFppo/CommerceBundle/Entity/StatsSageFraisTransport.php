<?php

namespace IFppo\CommerceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="StatsFraisTransport")
 */
class StatsSageFraisTransport {
    /**
    * @Id @Column(type="integer")
    */
    private $cbMarq;
    private $cgNum;
    private $ecMontant;
    private $ecIntitule;
    private $ecDate;
    
    public function getCbMarq() {
        return $this->cbMarq;
    }

    public function setCbMarq($cbMarq) {
        $this->cbMarq = $cbMarq;
    }

    public function getCgNum() {
        return $this->cgNum;
    }

    public function setCgNum($cgNum) {
        $this->cgNum = $cgNum;
    }

    public function getEcMontant() {
        return $this->ecMontant;
    }

    public function setEcMontant($ecMontant) {
        $this->ecMontant = $ecMontant;
    }

    public function getEcIntitule() {
        return $this->ecIntitule;
    }

    public function setEcIntitule($ecIntitule) {
        $this->ecIntitule = $ecIntitule;
    }

    public function getEcDate() {
        return $this->ecDate;
    }

    public function setEcDate($ecDate) {
        $this->ecDate = $ecDate;
    }


}

?>
