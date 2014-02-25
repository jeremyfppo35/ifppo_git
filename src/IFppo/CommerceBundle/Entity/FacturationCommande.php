<?php

namespace IFppo\CommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturationCommande
 */
class FacturationCommande
{
    /**
     * @var integer
     */
    private $incrementation;

    /**
     * @var float
     */
    private $numeroFacture;

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
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $dateFacture;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var string
     */
    private $reglement;

    /**
     * @var string
     */
    private $dateImpression;

    /**
     * @var string
     */
    private $dateEcheance;

    /**
     * @var integer
     */
    private $proforma;

    /**
     * @var integer
     */
    private $commandeChacal;

    /**
     * @var float
     */
    private $montantTotalHt;

    /**
     * @var float
     */
    private $tvaTotal;

    /**
     * @var float
     */
    private $montantTotalTtc;

    /**
     * @var integer
     */
    private $numeroCommercial;

    /**
     * @var string
     */
    private $paiement;

    /**
     * @var integer
     */
    private $quantiteTotale;

    /**
     * @var string
     */
    private $dateFactureInversee;

    /**
     * @var float
     */
    private $escompte;

    /**
     * @var float
     */
    private $factureAcquittee;

    /**
     * @var string
     */
    private $numeroCheque;

    /**
     * @var float
     */
    private $avoir;
    
    /**
     * @var integer
     */
    private $divers;    

    
    public function getDivers() {
        return $this->divers;
    }

    public function setDivers($divers) {
        $this->divers = $divers;
        return $this;
    }

        
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
     * Set numeroFacture
     *
     * @param float $numeroFacture
     * @return FacturationCommande
     */
    public function setNumeroFacture($numeroFacture)
    {
        $this->numeroFacture = $numeroFacture;
    
        return $this;
    }

    /**
     * Get numeroFacture
     *
     * @return float 
     */
    public function getNumeroFacture()
    {
        return $this->numeroFacture;
    }

    /**
     * Set numeroClient
     *
     * @param string $numeroClient
     * @return FacturationCommande
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
     * @return FacturationCommande
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
     * @return FacturationCommande
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
     * @return FacturationCommande
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
     * Set reference
     *
     * @param string $reference
     * @return FacturationCommande
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set dateFacture
     *
     * @param string $dateFacture
     * @return FacturationCommande
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;
    
        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return string 
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return FacturationCommande
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set reglement
     *
     * @param string $reglement
     * @return FacturationCommande
     */
    public function setReglement($reglement)
    {
        $this->reglement = $reglement;
    
        return $this;
    }

    /**
     * Get reglement
     *
     * @return string 
     */
    public function getReglement()
    {
        return $this->reglement;
    }

    /**
     * Set dateImpression
     *
     * @param string $dateImpression
     * @return FacturationCommande
     */
    public function setDateImpression($dateImpression)
    {
        $this->dateImpression = $dateImpression;
    
        return $this;
    }

    /**
     * Get dateImpression
     *
     * @return string 
     */
    public function getDateImpression()
    {
        return $this->dateImpression;
    }

    /**
     * Set dateEcheance
     *
     * @param string $dateEcheance
     * @return FacturationCommande
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;
    
        return $this;
    }

    /**
     * Get dateEcheance
     *
     * @return string 
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * Set proforma
     *
     * @param integer $proforma
     * @return FacturationCommande
     */
    public function setProforma($proforma)
    {
        $this->proforma = $proforma;
    
        return $this;
    }

    /**
     * Get proforma
     *
     * @return integer 
     */
    public function getProforma()
    {
        return $this->proforma;
    }

    /**
     * Set commandeChacal
     *
     * @param integer $commandeChacal
     * @return FacturationCommande
     */
    public function setCommandeChacal($commandeChacal)
    {
        $this->commandeChacal = $commandeChacal;
    
        return $this;
    }

    /**
     * Get commandeChacal
     *
     * @return integer 
     */
    public function getCommandeChacal()
    {
        return $this->commandeChacal;
    }

    /**
     * Set montantTotalHt
     *
     * @param float $montantTotalHt
     * @return FacturationCommande
     */
    public function setMontantTotalHt($montantTotalHt)
    {
        $this->montantTotalHt = $montantTotalHt;
    
        return $this;
    }

    /**
     * Get montantTotalHt
     *
     * @return float 
     */
    public function getMontantTotalHt()
    {
        return $this->montantTotalHt;
    }

    /**
     * Set tvaTotal
     *
     * @param float $tvaTotal
     * @return FacturationCommande
     */
    public function setTvaTotal($tvaTotal)
    {
        $this->tvaTotal = $tvaTotal;
    
        return $this;
    }

    /**
     * Get tvaTotal
     *
     * @return float 
     */
    public function getTvaTotal()
    {
        return $this->tvaTotal;
    }

    /**
     * Set montantTotalTtc
     *
     * @param float $montantTotalTtc
     * @return FacturationCommande
     */
    public function setMontantTotalTtc($montantTotalTtc)
    {
        $this->montantTotalTtc = $montantTotalTtc;
    
        return $this;
    }

    /**
     * Get montantTotalTtc
     *
     * @return float 
     */
    public function getMontantTotalTtc()
    {
        return $this->montantTotalTtc;
    }

    /**
     * Set numeroCommercial
     *
     * @param integer $numeroCommercial
     * @return FacturationCommande
     */
    public function setNumeroCommercial($numeroCommercial)
    {
        $this->numeroCommercial = $numeroCommercial;
    
        return $this;
    }

    /**
     * Get numeroCommercial
     *
     * @return integer 
     */
    public function getNumeroCommercial()
    {
        return $this->numeroCommercial;
    }

    /**
     * Set paiement
     *
     * @param string $paiement
     * @return FacturationCommande
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;
    
        return $this;
    }

    /**
     * Get paiement
     *
     * @return string 
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * Set quantiteTotale
     *
     * @param integer $quantiteTotale
     * @return FacturationCommande
     */
    public function setQuantiteTotale($quantiteTotale)
    {
        $this->quantiteTotale = $quantiteTotale;
    
        return $this;
    }

    /**
     * Get quantiteTotale
     *
     * @return integer 
     */
    public function getQuantiteTotale()
    {
        return $this->quantiteTotale;
    }

    /**
     * Set dateFactureInversee
     *
     * @param string $dateFactureInversee
     * @return FacturationCommande
     */
    public function setDateFactureInversee($dateFactureInversee)
    {
        $this->dateFactureInversee = $dateFactureInversee;
    
        return $this;
    }

    /**
     * Get dateFactureInversee
     *
     * @return string 
     */
    public function getDateFactureInversee()
    {
        return $this->dateFactureInversee;
    }

    /**
     * Set escompte
     *
     * @param float $escompte
     * @return FacturationCommande
     */
    public function setEscompte($escompte)
    {
        $this->escompte = $escompte;
    
        return $this;
    }

    /**
     * Get escompte
     *
     * @return float 
     */
    public function getEscompte()
    {
        return $this->escompte;
    }

    /**
     * Set factureAcquittee
     *
     * @param float $factureAcquittee
     * @return FacturationCommande
     */
    public function setFactureAcquittee($factureAcquittee)
    {
        $this->factureAcquittee = $factureAcquittee;
    
        return $this;
    }

    /**
     * Get factureAcquittee
     *
     * @return float 
     */
    public function getFactureAcquittee()
    {
        return $this->factureAcquittee;
    }

    /**
     * Set numeroCheque
     *
     * @param string $numeroCheque
     * @return FacturationCommande
     */
    public function setNumeroCheque($numeroCheque)
    {
        $this->numeroCheque = $numeroCheque;
    
        return $this;
    }

    /**
     * Get numeroCheque
     *
     * @return string 
     */
    public function getNumeroCheque()
    {
        return $this->numeroCheque;
    }

    /**
     * Set avoir
     *
     * @param float $avoir
     * @return FacturationCommande
     */
    public function setAvoir($avoir)
    {
        $this->avoir = $avoir;
    
        return $this;
    }

    /**
     * Get avoir
     *
     * @return float 
     */
    public function getAvoir()
    {
        return $this->avoir;
    }
}