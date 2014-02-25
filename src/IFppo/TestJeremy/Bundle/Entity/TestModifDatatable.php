<?php

namespace IFppo\PrevisionnelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * testmodifdatatable
 */
class TestModifDatatable
{
    /**
     * @var type integer
     */
    private $id;
    
    /**
     * @var type string
     */
    private $nom;
    
    /**
     * @var type date
     */
    private $dateNaissance;
    
    /**
     * @var type integer
     */
    private $age;
    
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
    
}