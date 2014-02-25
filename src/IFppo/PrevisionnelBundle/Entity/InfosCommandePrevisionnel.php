<?php

namespace IFppo\PrevisionnelBundle\Entity;

/**
 * Description of InfosCommandePrevisionnel
 *
 * @author jeremy.denieul
 */
class InfosCommandePrevisionnel {
    
    private $idProjet;
    private $numCommande;
    private $refCommande;
    private $etat;
    private $annexe;
    private $quantite;
    private $type;
    private $idClient;
    private $semaineFabrication;
    private $codePostal;
    private $adresseForce;
    private $typeAnnexe; 
    private $dateCreation;
    
    public function getIdProjet() {
        return $this->idProjet;
    }

    public function setIdProjet($idProjet) {
        $this->idProjet = $idProjet;
    }

    public function getNumCommande() {
        return $this->numCommande;
    }

    public function setNumCommande($numCommande) {
        $this->numCommande = $numCommande;
    }

    public function getRefCommande() {
        return $this->refCommande;
    }

    public function setRefCommande($refCommande) {
        $this->refCommande = $refCommande;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

    public function getAnnexe() {
        return $this->annexe;
    }

    public function setAnnexe($annexe) {
        $this->annexe = $annexe;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getIdClient() {
        return $this->idClient;
    }

    public function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    public function getSemaineFabrication() {
        return $this->semaineFabrication;
    }

    public function setSemaineFabrication($semaineFabrication) {
        $this->semaineFabrication = $semaineFabrication;
    }
    
    public function getCodePostal() {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    public function getAdresseForce() {
        return $this->adresseForce;
    }

    public function setAdresseForce($adresseForce) {
        $this->adresseForce = $adresseForce;
    }

    public function getTypeAnnexe() {
        return $this->typeAnnexe;
    }

    public function setTypeAnnexe($typeAnnexe) {
        $this->typeAnnexe = $typeAnnexe;
    }
    
    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;
    }
    
}

?>
