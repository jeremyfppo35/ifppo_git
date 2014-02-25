<?php

namespace IFppo\CommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfirmationCommande
 */
class ConfirmationCommande
{
    /**
     * @var integer
     */
    private $incrementation;

    /**
     * @var float
     */
    private $idClient;

    /**
     * @var string
     */
    private $numeroClient;

    /**
     * @var string
     */
    private $nomClient;

    /**
     * @var float
     */
    private $idCommande;

    /**
     * @var string
     */
    private $numeroCommande;

    /**
     * @var float
     */
    private $idPoste;

    /**
     * @var string
     */
    private $numeroPoste;

    /**
     * @var float
     */
    private $quantitePoste;

    /**
     * @var float
     */
    private $prixUnitairePoste;

    /**
     * @var float
     */
    private $prixTotalHtPoste;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $typeChassis;

    /**
     * @var string
     */
    private $typeProfils;

    /**
     * @var string
     */
    private $dimensionsClient;

    /**
     * @var string
     */
    private $couleur;

    /**
     * @var string
     */
    private $remplissage;

    /**
     * @var string
     */
    private $gamme;

    /**
     * @var string
     */
    private $finition;

    /**
     * @var integer
     */
    private $gratuit;


    /**
     * Get incrementation
     *
     * @return integer 
     */
    public function getIncrementation()
    {
        return $this->incrementation;
    }

    /**
     * Set idClient
     *
     * @param float $idClient
     * @return ConfirmationCommande
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    
        return $this;
    }

    /**
     * Get idClient
     *
     * @return float 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set numeroClient
     *
     * @param string $numeroClient
     * @return ConfirmationCommande
     */
    public function setNumeroClient($numeroClient)
    {
        $this->numeroClient = $numeroClient;
    
        return $this;
    }

    /**
     * Get numeroClient
     *
     * @return string 
     */
    public function getNumeroClient()
    {
        return $this->numeroClient;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     * @return ConfirmationCommande
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;
    
        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string 
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set idCommande
     *
     * @param float $idCommande
     * @return ConfirmationCommande
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    
        return $this;
    }

    /**
     * Get idCommande
     *
     * @return float 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set numeroCommande
     *
     * @param string $numeroCommande
     * @return ConfirmationCommande
     */
    public function setNumeroCommande($numeroCommande)
    {
        $this->numeroCommande = $numeroCommande;
    
        return $this;
    }

    /**
     * Get numeroCommande
     *
     * @return string 
     */
    public function getNumeroCommande()
    {
        return $this->numeroCommande;
    }

    /**
     * Set idPoste
     *
     * @param float $idPoste
     * @return ConfirmationCommande
     */
    public function setIdPoste($idPoste)
    {
        $this->idPoste = $idPoste;
    
        return $this;
    }

    /**
     * Get idPoste
     *
     * @return float 
     */
    public function getIdPoste()
    {
        return $this->idPoste;
    }

    /**
     * Set numeroPoste
     *
     * @param string $numeroPoste
     * @return ConfirmationCommande
     */
    public function setNumeroPoste($numeroPoste)
    {
        $this->numeroPoste = $numeroPoste;
    
        return $this;
    }

    /**
     * Get numeroPoste
     *
     * @return string 
     */
    public function getNumeroPoste()
    {
        return $this->numeroPoste;
    }

    /**
     * Set quantitePoste
     *
     * @param float $quantitePoste
     * @return ConfirmationCommande
     */
    public function setQuantitePoste($quantitePoste)
    {
        $this->quantitePoste = $quantitePoste;
    
        return $this;
    }

    /**
     * Get quantitePoste
     *
     * @return float 
     */
    public function getQuantitePoste()
    {
        return $this->quantitePoste;
    }

    /**
     * Set prixUnitairePoste
     *
     * @param float $prixUnitairePoste
     * @return ConfirmationCommande
     */
    public function setPrixUnitairePoste($prixUnitairePoste)
    {
        $this->prixUnitairePoste = $prixUnitairePoste;
    
        return $this;
    }

    /**
     * Get prixUnitairePoste
     *
     * @return float 
     */
    public function getPrixUnitairePoste()
    {
        return $this->prixUnitairePoste;
    }

    /**
     * Set prixTotalHtPoste
     *
     * @param float $prixTotalHtPoste
     * @return ConfirmationCommande
     */
    public function setPrixTotalHtPoste($prixTotalHtPoste)
    {
        $this->prixTotalHtPoste = $prixTotalHtPoste;
    
        return $this;
    }

    /**
     * Get prixTotalHtPoste
     *
     * @return float 
     */
    public function getPrixTotalHtPoste()
    {
        return $this->prixTotalHtPoste;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return ConfirmationCommande
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set typeChassis
     *
     * @param string $typeChassis
     * @return ConfirmationCommande
     */
    public function setTypeChassis($typeChassis)
    {
        $this->typeChassis = $typeChassis;
    
        return $this;
    }

    /**
     * Get typeChassis
     *
     * @return string 
     */
    public function getTypeChassis()
    {
        return $this->typeChassis;
    }

    /**
     * Set typeProfils
     *
     * @param string $typeProfils
     * @return ConfirmationCommande
     */
    public function setTypeProfils($typeProfils)
    {
        $this->typeProfils = $typeProfils;
    
        return $this;
    }

    /**
     * Get typeProfils
     *
     * @return string 
     */
    public function getTypeProfils()
    {
        return $this->typeProfils;
    }

    /**
     * Set dimensionsClient
     *
     * @param string $dimensionsClient
     * @return ConfirmationCommande
     */
    public function setDimensionsClient($dimensionsClient)
    {
        $this->dimensionsClient = $dimensionsClient;
    
        return $this;
    }

    /**
     * Get dimensionsClient
     *
     * @return string 
     */
    public function getDimensionsClient()
    {
        return $this->dimensionsClient;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return ConfirmationCommande
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    
        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set remplissage
     *
     * @param string $remplissage
     * @return ConfirmationCommande
     */
    public function setRemplissage($remplissage)
    {
        $this->remplissage = $remplissage;
    
        return $this;
    }

    /**
     * Get remplissage
     *
     * @return string 
     */
    public function getRemplissage()
    {
        return $this->remplissage;
    }

    /**
     * Set gamme
     *
     * @param string $gamme
     * @return ConfirmationCommande
     */
    public function setGamme($gamme)
    {
        $this->gamme = $gamme;
    
        return $this;
    }

    /**
     * Get gamme
     *
     * @return string 
     */
    public function getGamme()
    {
        return $this->gamme;
    }

    /**
     * Set finition
     *
     * @param string $finition
     * @return ConfirmationCommande
     */
    public function setFinition($finition)
    {
        $this->finition = $finition;
    
        return $this;
    }

    /**
     * Get finition
     *
     * @return string 
     */
    public function getFinition()
    {
        return $this->finition;
    }

    /**
     * Set gratuit
     *
     * @param integer $gratuit
     * @return ConfirmationCommande
     */
    public function setGratuit($gratuit)
    {
        $this->gratuit = $gratuit;
    
        return $this;
    }

    /**
     * Get gratuit
     *
     * @return integer 
     */
    public function getGratuit()
    {
        return $this->gratuit;
    }
}