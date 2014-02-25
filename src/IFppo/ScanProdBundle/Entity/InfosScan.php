<?php
namespace IFppo\ScanProdBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class InfosScan {
    
    private $idProjet;    
    private $quantite;
    private $exemplaire;
    private $codeBarre;
    private $nomPoste;
    private $imageProfil;
    private $referenceCommande;
    private $numCommande;   
    private $idPoste;


    public function getIdProjet() {
        return $this->idProjet;
    }

    public function setIdProjet($idProjet) {
        $this->idProjet = $idProjet;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function getExemplaire() {
        return $this->exemplaire;
    }

    public function setExemplaire($exemplaire) {
        $this->exemplaire = $exemplaire;
    }

    public function getCodeBarre() {
        return $this->codeBarre;
    }

    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;
    }

    public function getNomPoste() {
        return $this->nomPoste;
    }

    public function setNomPoste($nomPoste) {
        $this->nomPoste = $nomPoste;
    }

    public function getImageProfil() {
        return $this->imageProfil;
    }

    public function setImageProfil($imageProfil) {
        $this->imageProfil = $imageProfil;
    }

    public function getReferenceCommande() {
        return $this->referenceCommande;
    }

    public function setReferenceCommande($referenceCommande) {
        $this->referenceCommande = $referenceCommande;
    }

    public function getNumCommande() {
        return $this->numCommande;
    }

    public function setNumCommande($numCommande) {
        $this->numCommande = $numCommande;
    }
    
    public function getIdPoste() {
        return $this->idPoste;
    }

    public function setIdPoste($idPoste) {
        $this->idPoste = $idPoste;
    }
    
}

?>
