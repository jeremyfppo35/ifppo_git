<?php

namespace IFppo\CommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commercestats
 */
class Commercestats {

    /**
     * @var integer
     */
    private $identifiant;

    /**
     * @var string
     */
    private $idclient;

    /**
     * @var integer
     */
    private $codecommercial;

    /**
     * @var string
     */
    private $ouverturecompte;

    /**
     * @var integer
     */
    private $remise;

    /**
     * @var float
     */
    private $remisereelle;

    /**
     * @var float
     */
    private $progressionpourcentage;

    /**
     * @var float
     */
    private $progressionvaleur;

    /**
     * @var integer
     */
    private $prixpublic;

    /**
     * @var integer
     */
    private $indice;

    /**
     * @var integer
     */
    private $standardvaleur;

    /**
     * @var float
     */
    private $can;

    /**
     * @var float
     */
    private $can1;

    /**
     * @var float
     */
    private $divers;

    /**
     * @var float
     */
    private $futurol;

    /**
     * @var float
     */
    private $operationspecialesgains;

    /**
     * @var string
     */
    private $nomclient;

    /**
     * @var integer
     */
    private $codepostal;

    /**
     * @var string
     */
    private $assurancevalid;

    /**
     * @var float
     */
    private $cintrevaleur;

    /**
     * @var integer
     */
    private $nbchassiscintre;

    /**
     * @var float
     */
    private $visionvaleur;

    /**
     * @var integer
     */
    private $nbchassisvision;

    /**
     * @var float
     */
    private $aluvaleur;

    /**
     * @var integer
     */
    private $nbchassisalu;

    /**
     * @var float
     */
    private $diversavoirs;

    /**
     * @var integer
     */
    private $nbimpayesincident;
    
    /**
     * @var string
     */
    private $categorie;   
    
    /**
     * @var integer
     */    
    private $nbchassisstandard;
    
    /**
     * @var float
     */
    private $proforma;    

    /**
     * @var float
     */
    private $fraisTransport;
    
    /**
     * Get nbimpayesincident
     *
     * @return integer 
     */
    public function getNbimpayesincident() {
        return $this->nbimpayesincident;
    }

    public function setNbimpayesincident($nbimpayesincident) {
        $this->nbimpayesincident = $nbimpayesincident;
        return $this;
    }

    /**
     * Get identifiant
     *
     * @return integer 
     */
    public function getIdentifiant() {
        return $this->identifiant;
    }

    /**
     * Get idclient
     *
     * @return string 
     */
    public function getIdClient() {
        return $this->idclient;
    }

    /**
     * Set idClient
     *
     * @param string $idClient
     * @return Commercestats
     */
    public function setIdClient($idClient) {
        $this->idclient = $idClient;
        return $this;
    }

    /**
     * Set codecommercial
     *
     * @param integer $codecommercial
     * @return Commercestats
     */
    public function setCodeCommercial($codecommercial) {
        $this->codecommercial = $codecommercial;

        return $this;
    }

    /**
     * Get codecommercial
     *
     * @return integer 
     */
    public function getCodeCommercial() {
        return $this->codecommercial;
    }

    /**
     * Set ouverturecompte
     *
     * @param string $ouverturecompte
     * @return Commercestats
     */
    public function setOuvertureCompte($ouverturecompte) {
        $this->ouverturecompte = $ouverturecompte;

        return $this;
    }

    /**
     * Get ouverturecompte
     *
     * @return string 
     */
    public function getOuvertureCompte() {
        return $this->ouverturecompte;
    }

    /**
     * Set remise
     *
     * @param integer $remise
     * @return Commercestats
     */
    public function setRemise($remise) {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return integer 
     */
    public function getRemise() {
        return $this->remise;
    }

    /**
     * Set remisereelle
     *
     * @param float $remisereelle
     * @return Commercestats
     */
    public function setRemiseReelle($remisereelle) {
        $this->remisereelle = $remisereelle;

        return $this;
    }

    /**
     * Get remisereelle
     *
     * @return float 
     */
    public function getRemiseReelle() {
        return $this->remisereelle;
    }

    /**
     * Set progressionpourcentage
     *
     * @param float $progressionpourcentage
     * @return Commercestats
     */
    public function setProgressionPourcentage($progressionpourcentage) {
        $this->progressionpourcentage = $progressionpourcentage;

        return $this;
    }

    /**
     * Get progressionpourcentage
     *
     * @return float 
     */
    public function getProgressionPourcentage() {
        return $this->progressionpourcentage;
    }

    /**
     * Set progressionvaleur
     *
     * @param float $progressionvaleur
     * @return Commercestats
     */
    public function setProgressionValeur($progressionvaleur) {
        $this->progressionvaleur = $progressionvaleur;

        return $this;
    }

    /**
     * Get progressionvaleur
     *
     * @return float 
     */
    public function getProgressionValeur() {
        return $this->progressionvaleur;
    }

    /**
     * Set prixpublic
     *
     * @param integer $prixpublic
     * @return Commercestats
     */
    public function setPrixPublic($prixpublic) {
        $this->prixpublic = $prixpublic;

        return $this;
    }

    /**
     * Get prixpublic
     *
     * @return integer 
     */
    public function getPrixPublic() {
        return $this->prixpublic;
    }

    /**
     * Set indice
     *
     * @param integer $indice
     * @return Commercestats
     */
    public function setIndice($indice) {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get indice
     *
     * @return integer 
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Set standardvaleur
     *
     * @param integer $standardvaleur
     * @return Commercestats
     */
    public function setStandardValeur($standardvaleur) {
        $this->standardvaleur = $standardvaleur;

        return $this;
    }

    /**
     * Get standardvaleur
     *
     * @return integer 
     */
    public function getStandardValeur() {
        return $this->standardvaleur;
    }

    /**
     * Set can
     *
     * @param float $can
     * @return Commercestats
     */
    public function setCaN($can) {
        $this->can = $can;

        return $this;
    }

    /**
     * Get can
     *
     * @return float 
     */
    public function getCaN() {
        return $this->can;
    }

    /**
     * Set can1
     *
     * @param float $can1
     * @return Commercestats
     */
    public function setCaN1($can1) {
        $this->can1 = $can1;

        return $this;
    }

    /**
     * Get can1
     *
     * @return float 
     */
    public function getCaN1() {
        return $this->can1;
    }

    /**
     * Set divers
     *
     * @param float $divers
     * @return Commercestats
     */
    public function setDivers($divers) {
        $this->divers = $divers;

        return $this;
    }

    /**
     * Get divers
     *
     * @return float 
     */
    public function getDivers() {
        return $this->divers;
    }

    /**
     * Set futurol
     *
     * @param float $futurol
     * @return Commercestats
     */
    public function setFuturol($futurol) {
        $this->futurol = $futurol;

        return $this;
    }

    /**
     * Get futurol
     *
     * @return float 
     */
    public function getFuturol() {
        return $this->futurol;
    }

    /**
     * Set operationspecialesgains
     *
     * @param float $operationspecialesgains
     * @return Commercestats
     */
    public function setOperationSpecialesGains($operationspecialesgains) {
        $this->operationspecialesgains = $operationspecialesgains;

        return $this;
    }

    /**
     * Get operationspecialesgains
     *
     * @return float 
     */
    public function getOperationSpecialesGains() {
        return $this->operationspecialesgains;
    }

    /**
     * Set nomclient
     *
     * @param string $nomclient
     * @return Commercestats
     */
    public function setNomClient($nomclient) {
        $this->nomclient = $nomclient;

        return $this;
    }

    /**
     * Get nomclient
     *
     * @return string 
     */
    public function getNomClient() {
        return $this->nomclient;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Commercestats
     */
    public function setCodePostal($codepostal) {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer 
     */
    public function getCodePostal() {
        return $this->codepostal;
    }

    /**
     * Set assurancevalid
     *
     * @param string $assurancevalid
     * @return Commercestats
     */
    public function setAssuranceValid($assurancevalid) {
        $this->assurancevalid = $assurancevalid;

        return $this;
    }

    /**
     * Get assurancevalid
     *
     * @return string 
     */
    public function getAssuranceValid() {
        return $this->assurancevalid;
    }

    /**
     * Set cintrevaleur
     *
     * @param float $cintrevaleur
     * @return Commercestats
     */
    public function setCintreValeur($cintrevaleur) {
        $this->cintrevaleur = $cintrevaleur;

        return $this;
    }

    /**
     * Get cintrevaleur
     *
     * @return float 
     */
    public function getCintreValeur() {
        return $this->cintrevaleur;
    }

    /**
     * Set nbchassiscintre
     *
     * @param integer $nbchassiscintre
     * @return Commercestats
     */
    public function setNbChassisCintre($nbchassiscintre) {
        $this->nbchassiscintre = $nbchassiscintre;

        return $this;
    }

    /**
     * Get nbchassiscintre
     *
     * @return integer 
     */
    public function getNbChassisCintre() {
        return $this->nbchassiscintre;
    }

    /**
     * Set visionvaleur
     *
     * @param float $visionvaleur
     * @return Commercestats
     */
    public function setVisionValeur($visionvaleur) {
        $this->visionvaleur = $visionvaleur;

        return $this;
    }

    /**
     * Get visionvaleur
     *
     * @return float 
     */
    public function getVisionValeur() {
        return $this->visionvaleur;
    }

    /**
     * Set nbchassisvision
     *
     * @param integer $nbchassisvision
     * @return Commercestats
     */
    public function setNbChassisVision($nbchassisvision) {
        $this->nbchassisvision = $nbchassisvision;

        return $this;
    }

    /**
     * Get nbchassisvision
     *
     * @return integer 
     */
    public function getNbChassisVision() {
        return $this->nbchassisvision;
    }

    /**
     * Set aluvaleur
     *
     * @param float $aluvaleur
     * @return Commercestats
     */
    public function setAluValeur($aluvaleur) {
        $this->aluvaleur = $aluvaleur;

        return $this;
    }

    /**
     * Get aluvaleur
     *
     * @return float 
     */
    public function getAluValeur() {
        return $this->aluvaleur;
    }

    /**
     * Set nbchassisalu
     *
     * @param integer $nbchassisalu
     * @return Commercestats
     */
    public function setNbChassisAlu($nbchassisalu) {
        $this->nbchassisalu = $nbchassisalu;

        return $this;
    }

    /**
     * Get nbchassisalu
     *
     * @return integer 
     */
    public function getNbChassisAlu() {
        return $this->nbchassisalu;
    }

    /**
     * Set diversavoirs
     *
     * @param float $diversavoirs
     * @return Commercestats
     */
    public function setDiversAvoirs($diversavoirs) {
        $this->diversavoirs = $diversavoirs;

        return $this;
    }

    /**
     * Get diversavoirs
     *
     * @return float 
     */
    public function getDiversAvoirs() {
        return $this->diversavoirs;
    }
        
    public function getCategorie() {
        return $this->categorie;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
        return $this;
    }
    public function getNbChassisStandard() {
        return $this->nbchassisstandard;
    }

    public function setNbChassisStandard($nbchassisstandard) {
        $this->nbchassisstandard = $nbchassisstandard;
        return $this;
    }
    
    public function getProforma() {
        return $this->proforma;
    }

    public function setProforma($proforma) {
        $this->proforma = $proforma;
        return $this;
    }
    
    public function getFraisTransport() {
        return $this->fraisTransport;
    }

    public function setFraisTransport($fraisTransport) {
        $this->fraisTransport = $fraisTransport;
    }


}