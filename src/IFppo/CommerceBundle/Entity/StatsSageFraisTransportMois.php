<?php

namespace IFppo\CommerceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="StatsFraisTransportMois")
 */

class StatsSageFraisTransportMois {
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
