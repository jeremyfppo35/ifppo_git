<?php

namespace IFppo\CommerceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="Stats")
 */
class StatsSage {
    
    /**
    * @Id @Column(type="integer")
    */
    private $cbMarq;
    private $ctCodepostal;
    private $ctAssurance;
    private $ctIntitule;
    private $coNo;
    /**
     * @var string
    */
    private $coNom;
    private $ctNum;
    private $ctDateCreation;
    
    private $ctStats01;
    private $ctType;
    
    private $coPrenom;
    
    public function getCtCodepostal() {
        return $this->ctCodepostal;
    }

    public function getCbMarq() {
        return $this->cbMarq;
    }

    public function getCtAssurance() {
        return $this->ctAssurance;
    }

    public function getCtIntitule() {
        return $this->ctIntitule;
    }

    public function getCoNo() {
        return $this->coNo;
    }
    
    
    public function getCtNum() {
        return $this->ctNum;
    }

    /**
     * Set ctCodepostal
     *
     * @param string $ctCodepostal
     * @return StatsSage
     */
    public function setCtCodepostal($ctCodepostal)
    {
        $this->ctCodepostal = $ctCodepostal;
    
        return $this;
    }

    /**
     * Set ctAssurance
     *
     * @param float $ctAssurance
     * @return StatsSage
     */
    public function setCtAssurance($ctAssurance)
    {
        $this->ctAssurance = $ctAssurance;
    
        return $this;
    }

    /**
     * Set ctIntitule
     *
     * @param string $ctIntitule
     * @return StatsSage
     */
    public function setCtIntitule($ctIntitule)
    {
        $this->ctIntitule = $ctIntitule;
    
        return $this;
    }

    /**
     * Set coNo
     *
     * @param integer $coNo
     * @return StatsSage
     */
    public function setCoNo($coNo)
    {
        $this->coNo = $coNo;
    
        return $this;
    }

    /**
     * Set ctNum
     *
     * @param string $ctNum
     * @return StatsSage
     */
    public function setCtNum($ctNum)
    {
        $this->ctNum = $ctNum;
    
        return $this;
    }
    /**
     * Retourne la date de création du compte client
     * @return type
     */
    public function getCtDateCreation() {
        return $this->ctDateCreation;
    }
    public function setCtDateCreation($ctDateCreation) {
        $this->ctDateCreation = $ctDateCreation;
    }

    public function getCoNom() {
        return $this->coNom;
    }

    public function setCoNom($coNom) {
        $this->coNom = $coNom;
    }

    public function getCtStats01() {
        return $this->ctStats01;
    }

    public function setCtStats01($ctStats01) {
        $this->ctStats01 = $ctStats01;
    }

    public function getCtType() {
        return $this->ctType;
    }

    public function setCtType($ctType) {
        $this->ctType = $ctType;
    }
    
    public function getCoPrenom() {
        return $this->coPrenom;
    }

    public function setCoPrenom($coPrenom) {
        $this->coPrenom = $coPrenom;
    }


}