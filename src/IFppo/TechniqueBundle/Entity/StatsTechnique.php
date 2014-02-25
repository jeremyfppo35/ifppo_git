<?php

namespace IFppo\TechniqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of StatsTechnique
 *
 * @author jeremy.denieul
 */
class StatsTechnique {

    private $identifiant;
    private $numeroCommande;

    /**
     * @var string
     */
    private $dateFacture;
    private $poste;
    private $quantite;
    private $quantiteU;
    private $matModU;
    private $matU;
    private $modU;
    private $prixSaisiUni;
    private $tarifUnitaire;
    private $rapport;
    private $remise;
    private $categorie;
    private $genre;
    private $typeChassis;
    private $couleur;
    private $nomClient;
    private $options;
    private $dimensions;
    private $tarifUnitaireRem;
    private $remplissage;
    private $volets;
    

    public function getIdentifiant() {
        return $this->identifiant;
    }

    public function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
    }

    public function getNumeroCommande() {
        return $this->numeroCommande;
    }

    public function setNumeroCommande($numeroCommande) {
        $this->numeroCommande = $numeroCommande;
    }

    /**
     * Get dateFacture
     *
     * @return string 
     */
    public function getDateFacture() {
        return $this->dateFacture;
    }

    public function setDateFacture($dateFacture) {
        $this->dateFacture = $dateFacture;
    }

    public function getPoste() {
        return $this->poste;
    }

    public function setPoste($poste) {
        $this->poste = $poste;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function getQuantiteU() {
        return $this->quantiteU;
    }

    public function setQuantiteU($quantiteU) {
        $this->quantiteU = $quantiteU;
    }

        public function getMatModU() {
        return $this->matModU;
    }

    public function setMatModU($matModU) {
        $this->matModU = $matModU;
    }

    public function getMatU() {
        return $this->matU;
    }

    public function setMatU($matU) {
        $this->matU = $matU;
    }

    public function getModU() {
        return $this->modU;
    }

    public function setModU($modU) {
        $this->modU = $modU;
    }

    public function getPrixSaisiUni() {
        return $this->prixSaisiUni;
    }

    public function setPrixSaisiUni($prixSaisiUni) {
        $this->prixSaisiUni = $prixSaisiUni;
    }

    public function getTarifUnitaire() {
        return $this->tarifUnitaire;
    }

    public function setTarifUnitaire($tarifUnitaire) {
        $this->tarifUnitaire = $tarifUnitaire;
    }

    public function getRapport() {
        return $this->rapport;
    }

    public function setRapport($rapport) {
        $this->rapport = $rapport;
    }

    public function getRemise() {
        return $this->remise;
    }

    public function setRemise($remise) {
        $this->remise = $remise;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getTypeChassis() {
        return $this->typeChassis;
    }

    public function setTypeChassis($typeChassis) {
        $this->typeChassis = $typeChassis;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getNomClient() {
        return $this->nomClient;
    }

    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
    }

    public function getOptions() {
        return $this->options;
    }

    public function setOptions($options) {
        $this->options = $options;
    }

    public function getDimensions() {
        return $this->dimensions;
    }

    public function setDimensions($dimensions) {
        $this->dimensions = $dimensions;
    }

    public function getTarifUnitaireRem() {
        return $this->tarifUnitaireRem;
    }

    public function setTarifUnitaireRem($tarifUnitaireRem) {
        $this->tarifUnitaireRem = $tarifUnitaireRem;
    }
    
    public function getRemplissage() {
        return $this->remplissage;
    }

    public function setRemplissage($remplissage) {
        $this->remplissage = $remplissage;
    }
    
    public function getVolets() {
        return $this->volets;
    }

    public function setVolets($volets) {
        $this->volets = $volets;
    }    



}

?>

