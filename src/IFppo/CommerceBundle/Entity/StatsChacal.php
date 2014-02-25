<?php
namespace IFppo\CommerceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Stats")
 */
class StatsChacal {
    /**
    * @Id @Column(type="integer")
    */
    private $ptrIdProjet;
    private $oForme;
    private $iQuantite;
    private $ptrIdGamme;
    private $idClient;
    private $ptrIdClient;
    private $idProjet;
    private $idElevation;
    
    public function getPtrIdProjet() {
        return $this->ptrIdProjet;
    }

    public function getOForme() {
        return $this->oForme;
    }

    public function getIQuantite() {
        return $this->iQuantite;
    }

    public function getPtrIdGamme() {
        return $this->ptrIdGamme;
    }

    public function getIdClient() {
        return $this->idClient;
    }

    public function getPtrIdClient() {
        return $this->ptrIdClient;
    }

    public function getIdProjet() {
        return $this->idProjet;
    }

    public function getIdElevation() {
        return $this->idElevation;
    }
      

    /**
     * Set oForme
     *
     * @param integer $oForme
     * @return StatsChacal
     */
    public function setOForme($oForme)
    {
        $this->oForme = $oForme;
    
        return $this;
    }

    /**
     * Set iQuantite
     *
     * @param integer $iQuantite
     * @return StatsChacal
     */
    public function setIQuantite($iQuantite)
    {
        $this->iQuantite = $iQuantite;
    
        return $this;
    }

    /**
     * Set ptrIdGamme
     *
     * @param integer $ptrIdGamme
     * @return StatsChacal
     */
    public function setPtrIdGamme($ptrIdGamme)
    {
        $this->ptrIdGamme = $ptrIdGamme;
    
        return $this;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     * @return StatsChacal
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    
        return $this;
    }

    /**
     * Set ptrIdClient
     *
     * @param integer $ptrIdClient
     * @return StatsChacal
     */
    public function setPtrIdClient($ptrIdClient)
    {
        $this->ptrIdClient = $ptrIdClient;
    
        return $this;
    }

    /**
     * Set idProjet
     *
     * @param integer $idProjet
     * @return StatsChacal
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    
        return $this;
    }

    /**
     * Set idElevation
     *
     * @param integer $idElevation
     * @return StatsChacal
     */
    public function setIdElevation($idElevation)
    {
        $this->idElevation = $idElevation;
    
        return $this;
    }
}