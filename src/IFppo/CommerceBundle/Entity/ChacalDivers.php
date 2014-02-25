<?php

namespace IFppo\CommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChacalDivers
 */
class ChacalDivers
{
    /**
     * @var integer
     */
    private $autoincrementation;

    /**
     * @var float
     */
    private $ptridprojet;

    /**
     * @var float
     */
    private $numeroLigne;

    /**
     * @var float
     */
    private $indice;

    /**
     * @var float
     */
    private $ptriddesc;

    /**
     * @var string
     */
    private $mtexte;

    /**
     * @var string
     */
    private $referenceClient;

    /**
     * @var string
     */
    private $libelleCommentaire;

    /**
     * @var string
     */
    private $dimensionsCommentaire;

    /**
     * @var string
     */
    private $quantiteCommentaire;

    /**
     * @var float
     */
    private $prixHtUnitaire;

    /**
     * @var integer
     */
    private $imputationFppo;

    /**
     * @var integer
     */
    private $futurol;


    /**
     * Get autoincrementation
     *
     * @return integer 
     */
    public function getAutoincrementation()
    {
        return $this->autoincrementation;
    }

    /**
     * Set ptridprojet
     *
     * @param float $ptridprojet
     * @return ChacalDivers
     */
    public function setPtridprojet($ptridprojet)
    {
        $this->ptridprojet = $ptridprojet;
    
        return $this;
    }

    /**
     * Get ptridprojet
     *
     * @return float 
     */
    public function getPtridprojet()
    {
        return $this->ptridprojet;
    }

    /**
     * Set numeroLigne
     *
     * @param float $numeroLigne
     * @return ChacalDivers
     */
    public function setNumeroLigne($numeroLigne)
    {
        $this->numeroLigne = $numeroLigne;
    
        return $this;
    }

    /**
     * Get numeroLigne
     *
     * @return float 
     */
    public function getNumeroLigne()
    {
        return $this->numeroLigne;
    }

    /**
     * Set indice
     *
     * @param float $indice
     * @return ChacalDivers
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;
    
        return $this;
    }

    /**
     * Get indice
     *
     * @return float 
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set ptriddesc
     *
     * @param float $ptriddesc
     * @return ChacalDivers
     */
    public function setPtriddesc($ptriddesc)
    {
        $this->ptriddesc = $ptriddesc;
    
        return $this;
    }

    /**
     * Get ptriddesc
     *
     * @return float 
     */
    public function getPtriddesc()
    {
        return $this->ptriddesc;
    }

    /**
     * Set mtexte
     *
     * @param string $mtexte
     * @return ChacalDivers
     */
    public function setMtexte($mtexte)
    {
        $this->mtexte = $mtexte;
    
        return $this;
    }

    /**
     * Get mtexte
     *
     * @return string 
     */
    public function getMtexte()
    {
        return $this->mtexte;
    }

    /**
     * Set referenceClient
     *
     * @param string $referenceClient
     * @return ChacalDivers
     */
    public function setReferenceClient($referenceClient)
    {
        $this->referenceClient = $referenceClient;
    
        return $this;
    }

    /**
     * Get referenceClient
     *
     * @return string 
     */
    public function getReferenceClient()
    {
        return $this->referenceClient;
    }

    /**
     * Set libelleCommentaire
     *
     * @param string $libelleCommentaire
     * @return ChacalDivers
     */
    public function setLibelleCommentaire($libelleCommentaire)
    {
        $this->libelleCommentaire = $libelleCommentaire;
    
        return $this;
    }

    /**
     * Get libelleCommentaire
     *
     * @return string 
     */
    public function getLibelleCommentaire()
    {
        return $this->libelleCommentaire;
    }

    /**
     * Set dimensionsCommentaire
     *
     * @param string $dimensionsCommentaire
     * @return ChacalDivers
     */
    public function setDimensionsCommentaire($dimensionsCommentaire)
    {
        $this->dimensionsCommentaire = $dimensionsCommentaire;
    
        return $this;
    }

    /**
     * Get dimensionsCommentaire
     *
     * @return string 
     */
    public function getDimensionsCommentaire()
    {
        return $this->dimensionsCommentaire;
    }

    /**
     * Set quantiteCommentaire
     *
     * @param string $quantiteCommentaire
     * @return ChacalDivers
     */
    public function setQuantiteCommentaire($quantiteCommentaire)
    {
        $this->quantiteCommentaire = $quantiteCommentaire;
    
        return $this;
    }

    /**
     * Get quantiteCommentaire
     *
     * @return string 
     */
    public function getQuantiteCommentaire()
    {
        return $this->quantiteCommentaire;
    }

    /**
     * Set prixHtUnitaire
     *
     * @param float $prixHtUnitaire
     * @return ChacalDivers
     */
    public function setPrixHtUnitaire($prixHtUnitaire)
    {
        $this->prixHtUnitaire = $prixHtUnitaire;
    
        return $this;
    }

    /**
     * Get prixHtUnitaire
     *
     * @return float 
     */
    public function getPrixHtUnitaire()
    {
        return $this->prixHtUnitaire;
    }

    /**
     * Set imputationFppo
     *
     * @param integer $imputationFppo
     * @return ChacalDivers
     */
    public function setImputationFppo($imputationFppo)
    {
        $this->imputationFppo = $imputationFppo;
    
        return $this;
    }

    /**
     * Get imputationFppo
     *
     * @return integer 
     */
    public function getImputationFppo()
    {
        return $this->imputationFppo;
    }

    /**
     * Set futurol
     *
     * @param integer $futurol
     * @return ChacalDivers
     */
    public function setFuturol($futurol)
    {
        $this->futurol = $futurol;
    
        return $this;
    }

    /**
     * Get futurol
     *
     * @return integer 
     */
    public function getFuturol()
    {
        return $this->futurol;
    }
}