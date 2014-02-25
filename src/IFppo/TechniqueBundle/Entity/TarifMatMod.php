<?php

namespace IFppo\TechniqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of TarifMatMod
 *
 * @author jeremy.denieul
 */
class TarifMatMod {
    
    private $incrementation;
    private $idCommande;
    private $numeroCommande;
    private $idPoste;
    private $refPoste;
    private $matMod;
    private $prixTarif;
    private $nomPlusValue;
    private $prixPlusValue;
    private $prixImpose;
    private $nomClient;
    private $remiseClient;
    
    public function getIncrementation() {
        return $this->incrementation;
    }

    public function setIncrementation($incrementation) {
        $this->incrementation = $incrementation;
    }

    public function getIdCommande() {
        return $this->idCommande;
    }

    public function setIdCommande($idCommande) {
        $this->idCommande = $idCommande;
    }

    public function getNumeroCommande() {
        return $this->numeroCommande;
    }

    public function setNumeroCommande($numeroCommande) {
        $this->numeroCommande = $numeroCommande;
    }

    public function getIdPoste() {
        return $this->idPoste;
    }

    public function setIdPoste($idPoste) {
        $this->idPoste = $idPoste;
    }

        public function getRefPoste() {
        return $this->refPoste;
    }

    public function setRefPoste($refPoste) {
        $this->refPoste = $refPoste;
    }

    public function getMatMod() {
        return $this->matMod;
    }

    public function setMatMod($matMod) {
        $this->matMod = $matMod;
    }

    public function getPrixTarif() {
        return $this->prixTarif;
    }

    public function setPrixTarif($prixTarif) {
        $this->prixTarif = $prixTarif;
    }

    public function getNomPlusValue() {
        return $this->nomPlusValue;
    }

    public function setNomPlusValue($nomPlusValue) {
        $this->nomPlusValue = $nomPlusValue;
    }

    public function getPrixPlusValue() {
        return $this->prixPlusValue;
    }

    public function setPrixPlusValue($prixPlusValue) {
        $this->prixPlusValue = $prixPlusValue;
    }

    public function getPrixImpose() {
        return $this->prixImpose;
    }

    public function setPrixImpose($prixImpose) {
        $this->prixImpose = $prixImpose;
    }

    public function getNomClient() {
        return $this->nomClient;
    }

    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
    }

    public function getRemiseClient() {
        return $this->remiseClient;
    }

    public function setRemiseClient($remiseClient) {
        $this->remiseClient = $remiseClient;
    }
    
    
            
}

?>
