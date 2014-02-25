<?php

namespace IFppo\PrevisionnelBundle\Classes;

/**
 * Description of CommandePrevi
 *
 * @author jeremy.denieul
 */
class CommandePrevi {
    
    
    private $semaineFab;
    private $departement;
    private $nomClient;
    private $commercial;
    private $numCommande;
    private $refCommande;
    private $gamme;    
    private $dateReception;
    private $quantite;
    private $quantiteCintre;
    private $quantiteAlu;
    private $quantiteWisio;
    private $quantiteCouleur;
    private $quantiteFuturol;
    private $delaiImpose;
    private $commentaire;
    
    
    function __construct() {
        
    }
    
    public function getSemaineFab() {
        return $this->semaineFab;
    }

    public function setSemaineFab($semaineFab) {
        $this->semaineFab = $semaineFab;
    }

    
    public function getDepartement() {
        return $this->departement;
    }

    public function setDepartement($departement) {
        $this->departement = $departement;
    }

    public function getNomClient() {
        return $this->nomClient;
    }

    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
    }

    public function getCommercial() {
        return $this->commercial;
    }

    public function setCommercial($commercial) {
        $this->commercial = $commercial;
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

    public function getGamme() {
        return $this->gamme;
    }

    public function setGamme($gamme) {
        $this->gamme = $gamme;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }
    
    public function getDateReception() {
        return $this->dateReception;
    }

    public function setDateReception($dateReception) {
        $this->dateReception = $dateReception;
    }
    
    public function getQuantiteCintre() {
        return $this->quantiteCintre;
    }

    public function setQuantiteCintre($quantiteCintre) {
        $this->quantiteCintre = $quantiteCintre;
    }

    public function getQuantiteCouleur() {
        return $this->quantiteCouleur;
    }

    public function setQuantiteCouleur($quantiteCouleur) {
        $this->quantiteCouleur = $quantiteCouleur;
    }
    
    
    public function getQuantiteAlu() {
        return $this->quantiteAlu;
    }

    public function setQuantiteAlu($quantiteAlu) {
        $this->quantiteAlu = $quantiteAlu;
    }

    public function getQuantiteWisio() {
        return $this->quantiteWisio;
    }

    public function setQuantiteWisio($quantiteWisio) {
        $this->quantiteWisio = $quantiteWisio;
    }
    
    
    public function getDelaiImpose() {
        return $this->delaiImpose;
    }

    public function setDelaiImpose($delaiImpose) {
        $this->delaiImpose = $delaiImpose;
    }
    
    public function getCommentaire() {
        return $this->commentaire;
    }

    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    public function getQuantiteFuturol() {
        return $this->quantiteFuturol;
    }

    public function setQuantiteFuturol($quantiteFuturol) {
        $this->quantiteFuturol = $quantiteFuturol;
    }


}

?>
