<?php

namespace IFppo\CommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsSage
 */
class ClientsSage
{
    /**
     * @var float
     */
    private $numero;

    /**
     * @var float
     */
    private $komilfo;

    /**
     * @var string
     */
    private $client;

    /**
     * @var string
     */
    private $codeClient;

    /**
     * @var float
     */
    private $clientActif;

    /**
     * @var string
     */
    private $telAbrege;

    /**
     * @var float
     */
    private $codeCommercial;

    /**
     * @var string
     */
    private $adresse1Livraison;

    /**
     * @var string
     */
    private $adresse2Livraison;

    /**
     * @var string
     */
    private $cpLivraison;

    /**
     * @var string
     */
    private $villeLivraison;

    /**
     * @var string
     */
    private $dateCreation;

    /**
     * @var string
     */
    private $dateModification;

    /**
     * @var string
     */
    private $namur;

    /**
     * @var string
     */
    private $contact1;

    /**
     * @var string
     */
    private $fonction1;

    /**
     * @var string
     */
    private $telephone1;

    /**
     * @var string
     */
    private $fax1;

    /**
     * @var string
     */
    private $mobile1;

    /**
     * @var string
     */
    private $mail1;

    /**
     * @var string
     */
    private $contact2;

    /**
     * @var string
     */
    private $fonction2;

    /**
     * @var string
     */
    private $mobile2;

    /**
     * @var string
     */
    private $telephone2;

    /**
     * @var string
     */
    private $fax2;

    /**
     * @var string
     */
    private $mail2;

    /**
     * @var string
     */
    private $contact3;

    /**
     * @var string
     */
    private $fonction3;

    /**
     * @var string
     */
    private $telephone3;

    /**
     * @var string
     */
    private $fax3;

    /**
     * @var string
     */
    private $mobile3;

    /**
     * @var string
     */
    private $mail3;

    /**
     * @var string
     */
    private $contact4;

    /**
     * @var string
     */
    private $fonction4;

    /**
     * @var string
     */
    private $telephone4;

    /**
     * @var string
     */
    private $fax4;

    /**
     * @var string
     */
    private $mobile4;

    /**
     * @var string
     */
    private $mail4;

    /**
     * @var string
     */
    private $contact5;

    /**
     * @var string
     */
    private $fonction5;

    /**
     * @var string
     */
    private $telephone5;

    /**
     * @var string
     */
    private $fax5;

    /**
     * @var string
     */
    private $mobile5;

    /**
     * @var string
     */
    private $mail5;

    /**
     * @var string
     */
    private $observationsCommerce;

    /**
     * @var string
     */
    private $observationsTransport;

    /**
     * @var float
     */
    private $docFppoProduits;

    /**
     * @var float
     */
    private $docFppoEntreprises;

    /**
     * @var float
     */
    private $docFppoPe;

    /**
     * @var float
     */
    private $docValises;

    /**
     * @var float
     */
    private $docBarrettesCouleurs;

    /**
     * @var float
     */
    private $docMailingBoitage;

    /**
     * @var string
     */
    private $dateDocFppoProduits;

    /**
     * @var string
     */
    private $dateDocFppoEntreprises;

    /**
     * @var string
     */
    private $dateDocFppoPe;

    /**
     * @var string
     */
    private $dateDocValises;

    /**
     * @var string
     */
    private $dateDocBarrettesCouleurs;

    /**
     * @var string
     */
    private $dateDocMailingBoitage;

    /**
     * @var string
     */
    private $observationsTtc;

    /**
     * @var string
     */
    private $observationsGestion;

    /**
     * @var float
     */
    private $communicationMail;

    /**
     * @var float
     */
    private $communicationFax;

    /**
     * @var float
     */
    private $tva;

    /**
     * @var float
     */
    private $particulier;

    /**
     * @var string
     */
    private $siteWeb;

    /**
     * @var float
     */
    private $remise;

    /**
     * @var string
     */
    private $dateRemise;

    /**
     * @var string
     */
    private $dateLivraison;

    /**
     * @var string
     */
    private $dateWeb;

    /**
     * @var string
     */
    private $dateContact1;

    /**
     * @var string
     */
    private $dateContact2;

    /**
     * @var string
     */
    private $dateContact3;

    /**
     * @var string
     */
    private $dateContact4;

    /**
     * @var string
     */
    private $dateContact5;

    /**
     * @var string
     */
    private $dateInfoCommerce;

    /**
     * @var string
     */
    private $dateDocumentations;

    /**
     * @var string
     */
    private $dateObservationsCommerce;

    /**
     * @var string
     */
    private $dateObservationsTransport;

    /**
     * @var string
     */
    private $dateObservationsTtc;

    /**
     * @var string
     */
    private $dateObservationsComptabilite;


    /**
     * Get numero
     *
     * @return float 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set komilfo
     *
     * @param float $komilfo
     * @return ClientsSage
     */
    public function setKomilfo($komilfo)
    {
        $this->komilfo = $komilfo;
    
        return $this;
    }

    /**
     * Get komilfo
     *
     * @return float 
     */
    public function getKomilfo()
    {
        return $this->komilfo;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return ClientsSage
     */
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set codeClient
     *
     * @param string $codeClient
     * @return ClientsSage
     */
    public function setCodeClient($codeClient)
    {
        $this->codeClient = $codeClient;
    
        return $this;
    }

    /**
     * Get codeClient
     *
     * @return string 
     */
    public function getCodeClient()
    {
        return $this->codeClient;
    }

    /**
     * Set clientActif
     *
     * @param float $clientActif
     * @return ClientsSage
     */
    public function setClientActif($clientActif)
    {
        $this->clientActif = $clientActif;
    
        return $this;
    }

    /**
     * Get clientActif
     *
     * @return float 
     */
    public function getClientActif()
    {
        return $this->clientActif;
    }

    /**
     * Set telAbrege
     *
     * @param string $telAbrege
     * @return ClientsSage
     */
    public function setTelAbrege($telAbrege)
    {
        $this->telAbrege = $telAbrege;
    
        return $this;
    }

    /**
     * Get telAbrege
     *
     * @return string 
     */
    public function getTelAbrege()
    {
        return $this->telAbrege;
    }

    /**
     * Set codeCommercial
     *
     * @param float $codeCommercial
     * @return ClientsSage
     */
    public function setCodeCommercial($codeCommercial)
    {
        $this->codeCommercial = $codeCommercial;
    
        return $this;
    }

    /**
     * Get codeCommercial
     *
     * @return float 
     */
    public function getCodeCommercial()
    {
        return $this->codeCommercial;
    }

    /**
     * Set adresse1Livraison
     *
     * @param string $adresse1Livraison
     * @return ClientsSage
     */
    public function setAdresse1Livraison($adresse1Livraison)
    {
        $this->adresse1Livraison = $adresse1Livraison;
    
        return $this;
    }

    /**
     * Get adresse1Livraison
     *
     * @return string 
     */
    public function getAdresse1Livraison()
    {
        return $this->adresse1Livraison;
    }

    /**
     * Set adresse2Livraison
     *
     * @param string $adresse2Livraison
     * @return ClientsSage
     */
    public function setAdresse2Livraison($adresse2Livraison)
    {
        $this->adresse2Livraison = $adresse2Livraison;
    
        return $this;
    }

    /**
     * Get adresse2Livraison
     *
     * @return string 
     */
    public function getAdresse2Livraison()
    {
        return $this->adresse2Livraison;
    }

    /**
     * Set cpLivraison
     *
     * @param string $cpLivraison
     * @return ClientsSage
     */
    public function setCpLivraison($cpLivraison)
    {
        $this->cpLivraison = $cpLivraison;
    
        return $this;
    }

    /**
     * Get cpLivraison
     *
     * @return string 
     */
    public function getCpLivraison()
    {
        return $this->cpLivraison;
    }

    /**
     * Set villeLivraison
     *
     * @param string $villeLivraison
     * @return ClientsSage
     */
    public function setVilleLivraison($villeLivraison)
    {
        $this->villeLivraison = $villeLivraison;
    
        return $this;
    }

    /**
     * Get villeLivraison
     *
     * @return string 
     */
    public function getVilleLivraison()
    {
        return $this->villeLivraison;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     * @return ClientsSage
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModification
     *
     * @param string $dateModification
     * @return ClientsSage
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;
    
        return $this;
    }

    /**
     * Get dateModification
     *
     * @return string 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set namur
     *
     * @param string $namur
     * @return ClientsSage
     */
    public function setNamur($namur)
    {
        $this->namur = $namur;
    
        return $this;
    }

    /**
     * Get namur
     *
     * @return string 
     */
    public function getNamur()
    {
        return $this->namur;
    }

    /**
     * Set contact1
     *
     * @param string $contact1
     * @return ClientsSage
     */
    public function setContact1($contact1)
    {
        $this->contact1 = $contact1;
    
        return $this;
    }

    /**
     * Get contact1
     *
     * @return string 
     */
    public function getContact1()
    {
        return $this->contact1;
    }

    /**
     * Set fonction1
     *
     * @param string $fonction1
     * @return ClientsSage
     */
    public function setFonction1($fonction1)
    {
        $this->fonction1 = $fonction1;
    
        return $this;
    }

    /**
     * Get fonction1
     *
     * @return string 
     */
    public function getFonction1()
    {
        return $this->fonction1;
    }

    /**
     * Set telephone1
     *
     * @param string $telephone1
     * @return ClientsSage
     */
    public function setTelephone1($telephone1)
    {
        $this->telephone1 = $telephone1;
    
        return $this;
    }

    /**
     * Get telephone1
     *
     * @return string 
     */
    public function getTelephone1()
    {
        return $this->telephone1;
    }

    /**
     * Set fax1
     *
     * @param string $fax1
     * @return ClientsSage
     */
    public function setFax1($fax1)
    {
        $this->fax1 = $fax1;
    
        return $this;
    }

    /**
     * Get fax1
     *
     * @return string 
     */
    public function getFax1()
    {
        return $this->fax1;
    }

    /**
     * Set mobile1
     *
     * @param string $mobile1
     * @return ClientsSage
     */
    public function setMobile1($mobile1)
    {
        $this->mobile1 = $mobile1;
    
        return $this;
    }

    /**
     * Get mobile1
     *
     * @return string 
     */
    public function getMobile1()
    {
        return $this->mobile1;
    }

    /**
     * Set mail1
     *
     * @param string $mail1
     * @return ClientsSage
     */
    public function setMail1($mail1)
    {
        $this->mail1 = $mail1;
    
        return $this;
    }

    /**
     * Get mail1
     *
     * @return string 
     */
    public function getMail1()
    {
        return $this->mail1;
    }

    /**
     * Set contact2
     *
     * @param string $contact2
     * @return ClientsSage
     */
    public function setContact2($contact2)
    {
        $this->contact2 = $contact2;
    
        return $this;
    }

    /**
     * Get contact2
     *
     * @return string 
     */
    public function getContact2()
    {
        return $this->contact2;
    }

    /**
     * Set fonction2
     *
     * @param string $fonction2
     * @return ClientsSage
     */
    public function setFonction2($fonction2)
    {
        $this->fonction2 = $fonction2;
    
        return $this;
    }

    /**
     * Get fonction2
     *
     * @return string 
     */
    public function getFonction2()
    {
        return $this->fonction2;
    }

    /**
     * Set mobile2
     *
     * @param string $mobile2
     * @return ClientsSage
     */
    public function setMobile2($mobile2)
    {
        $this->mobile2 = $mobile2;
    
        return $this;
    }

    /**
     * Get mobile2
     *
     * @return string 
     */
    public function getMobile2()
    {
        return $this->mobile2;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     * @return ClientsSage
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;
    
        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string 
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set fax2
     *
     * @param string $fax2
     * @return ClientsSage
     */
    public function setFax2($fax2)
    {
        $this->fax2 = $fax2;
    
        return $this;
    }

    /**
     * Get fax2
     *
     * @return string 
     */
    public function getFax2()
    {
        return $this->fax2;
    }

    /**
     * Set mail2
     *
     * @param string $mail2
     * @return ClientsSage
     */
    public function setMail2($mail2)
    {
        $this->mail2 = $mail2;
    
        return $this;
    }

    /**
     * Get mail2
     *
     * @return string 
     */
    public function getMail2()
    {
        return $this->mail2;
    }

    /**
     * Set contact3
     *
     * @param string $contact3
     * @return ClientsSage
     */
    public function setContact3($contact3)
    {
        $this->contact3 = $contact3;
    
        return $this;
    }

    /**
     * Get contact3
     *
     * @return string 
     */
    public function getContact3()
    {
        return $this->contact3;
    }

    /**
     * Set fonction3
     *
     * @param string $fonction3
     * @return ClientsSage
     */
    public function setFonction3($fonction3)
    {
        $this->fonction3 = $fonction3;
    
        return $this;
    }

    /**
     * Get fonction3
     *
     * @return string 
     */
    public function getFonction3()
    {
        return $this->fonction3;
    }

    /**
     * Set telephone3
     *
     * @param string $telephone3
     * @return ClientsSage
     */
    public function setTelephone3($telephone3)
    {
        $this->telephone3 = $telephone3;
    
        return $this;
    }

    /**
     * Get telephone3
     *
     * @return string 
     */
    public function getTelephone3()
    {
        return $this->telephone3;
    }

    /**
     * Set fax3
     *
     * @param string $fax3
     * @return ClientsSage
     */
    public function setFax3($fax3)
    {
        $this->fax3 = $fax3;
    
        return $this;
    }

    /**
     * Get fax3
     *
     * @return string 
     */
    public function getFax3()
    {
        return $this->fax3;
    }

    /**
     * Set mobile3
     *
     * @param string $mobile3
     * @return ClientsSage
     */
    public function setMobile3($mobile3)
    {
        $this->mobile3 = $mobile3;
    
        return $this;
    }

    /**
     * Get mobile3
     *
     * @return string 
     */
    public function getMobile3()
    {
        return $this->mobile3;
    }

    /**
     * Set mail3
     *
     * @param string $mail3
     * @return ClientsSage
     */
    public function setMail3($mail3)
    {
        $this->mail3 = $mail3;
    
        return $this;
    }

    /**
     * Get mail3
     *
     * @return string 
     */
    public function getMail3()
    {
        return $this->mail3;
    }

    /**
     * Set contact4
     *
     * @param string $contact4
     * @return ClientsSage
     */
    public function setContact4($contact4)
    {
        $this->contact4 = $contact4;
    
        return $this;
    }

    /**
     * Get contact4
     *
     * @return string 
     */
    public function getContact4()
    {
        return $this->contact4;
    }

    /**
     * Set fonction4
     *
     * @param string $fonction4
     * @return ClientsSage
     */
    public function setFonction4($fonction4)
    {
        $this->fonction4 = $fonction4;
    
        return $this;
    }

    /**
     * Get fonction4
     *
     * @return string 
     */
    public function getFonction4()
    {
        return $this->fonction4;
    }

    /**
     * Set telephone4
     *
     * @param string $telephone4
     * @return ClientsSage
     */
    public function setTelephone4($telephone4)
    {
        $this->telephone4 = $telephone4;
    
        return $this;
    }

    /**
     * Get telephone4
     *
     * @return string 
     */
    public function getTelephone4()
    {
        return $this->telephone4;
    }

    /**
     * Set fax4
     *
     * @param string $fax4
     * @return ClientsSage
     */
    public function setFax4($fax4)
    {
        $this->fax4 = $fax4;
    
        return $this;
    }

    /**
     * Get fax4
     *
     * @return string 
     */
    public function getFax4()
    {
        return $this->fax4;
    }

    /**
     * Set mobile4
     *
     * @param string $mobile4
     * @return ClientsSage
     */
    public function setMobile4($mobile4)
    {
        $this->mobile4 = $mobile4;
    
        return $this;
    }

    /**
     * Get mobile4
     *
     * @return string 
     */
    public function getMobile4()
    {
        return $this->mobile4;
    }

    /**
     * Set mail4
     *
     * @param string $mail4
     * @return ClientsSage
     */
    public function setMail4($mail4)
    {
        $this->mail4 = $mail4;
    
        return $this;
    }

    /**
     * Get mail4
     *
     * @return string 
     */
    public function getMail4()
    {
        return $this->mail4;
    }

    /**
     * Set contact5
     *
     * @param string $contact5
     * @return ClientsSage
     */
    public function setContact5($contact5)
    {
        $this->contact5 = $contact5;
    
        return $this;
    }

    /**
     * Get contact5
     *
     * @return string 
     */
    public function getContact5()
    {
        return $this->contact5;
    }

    /**
     * Set fonction5
     *
     * @param string $fonction5
     * @return ClientsSage
     */
    public function setFonction5($fonction5)
    {
        $this->fonction5 = $fonction5;
    
        return $this;
    }

    /**
     * Get fonction5
     *
     * @return string 
     */
    public function getFonction5()
    {
        return $this->fonction5;
    }

    /**
     * Set telephone5
     *
     * @param string $telephone5
     * @return ClientsSage
     */
    public function setTelephone5($telephone5)
    {
        $this->telephone5 = $telephone5;
    
        return $this;
    }

    /**
     * Get telephone5
     *
     * @return string 
     */
    public function getTelephone5()
    {
        return $this->telephone5;
    }

    /**
     * Set fax5
     *
     * @param string $fax5
     * @return ClientsSage
     */
    public function setFax5($fax5)
    {
        $this->fax5 = $fax5;
    
        return $this;
    }

    /**
     * Get fax5
     *
     * @return string 
     */
    public function getFax5()
    {
        return $this->fax5;
    }

    /**
     * Set mobile5
     *
     * @param string $mobile5
     * @return ClientsSage
     */
    public function setMobile5($mobile5)
    {
        $this->mobile5 = $mobile5;
    
        return $this;
    }

    /**
     * Get mobile5
     *
     * @return string 
     */
    public function getMobile5()
    {
        return $this->mobile5;
    }

    /**
     * Set mail5
     *
     * @param string $mail5
     * @return ClientsSage
     */
    public function setMail5($mail5)
    {
        $this->mail5 = $mail5;
    
        return $this;
    }

    /**
     * Get mail5
     *
     * @return string 
     */
    public function getMail5()
    {
        return $this->mail5;
    }

    /**
     * Set observationsCommerce
     *
     * @param string $observationsCommerce
     * @return ClientsSage
     */
    public function setObservationsCommerce($observationsCommerce)
    {
        $this->observationsCommerce = $observationsCommerce;
    
        return $this;
    }

    /**
     * Get observationsCommerce
     *
     * @return string 
     */
    public function getObservationsCommerce()
    {
        return $this->observationsCommerce;
    }

    /**
     * Set observationsTransport
     *
     * @param string $observationsTransport
     * @return ClientsSage
     */
    public function setObservationsTransport($observationsTransport)
    {
        $this->observationsTransport = $observationsTransport;
    
        return $this;
    }

    /**
     * Get observationsTransport
     *
     * @return string 
     */
    public function getObservationsTransport()
    {
        return $this->observationsTransport;
    }

    /**
     * Set docFppoProduits
     *
     * @param float $docFppoProduits
     * @return ClientsSage
     */
    public function setDocFppoProduits($docFppoProduits)
    {
        $this->docFppoProduits = $docFppoProduits;
    
        return $this;
    }

    /**
     * Get docFppoProduits
     *
     * @return float 
     */
    public function getDocFppoProduits()
    {
        return $this->docFppoProduits;
    }

    /**
     * Set docFppoEntreprises
     *
     * @param float $docFppoEntreprises
     * @return ClientsSage
     */
    public function setDocFppoEntreprises($docFppoEntreprises)
    {
        $this->docFppoEntreprises = $docFppoEntreprises;
    
        return $this;
    }

    /**
     * Get docFppoEntreprises
     *
     * @return float 
     */
    public function getDocFppoEntreprises()
    {
        return $this->docFppoEntreprises;
    }

    /**
     * Set docFppoPe
     *
     * @param float $docFppoPe
     * @return ClientsSage
     */
    public function setDocFppoPe($docFppoPe)
    {
        $this->docFppoPe = $docFppoPe;
    
        return $this;
    }

    /**
     * Get docFppoPe
     *
     * @return float 
     */
    public function getDocFppoPe()
    {
        return $this->docFppoPe;
    }

    /**
     * Set docValises
     *
     * @param float $docValises
     * @return ClientsSage
     */
    public function setDocValises($docValises)
    {
        $this->docValises = $docValises;
    
        return $this;
    }

    /**
     * Get docValises
     *
     * @return float 
     */
    public function getDocValises()
    {
        return $this->docValises;
    }

    /**
     * Set docBarrettesCouleurs
     *
     * @param float $docBarrettesCouleurs
     * @return ClientsSage
     */
    public function setDocBarrettesCouleurs($docBarrettesCouleurs)
    {
        $this->docBarrettesCouleurs = $docBarrettesCouleurs;
    
        return $this;
    }

    /**
     * Get docBarrettesCouleurs
     *
     * @return float 
     */
    public function getDocBarrettesCouleurs()
    {
        return $this->docBarrettesCouleurs;
    }

    /**
     * Set docMailingBoitage
     *
     * @param float $docMailingBoitage
     * @return ClientsSage
     */
    public function setDocMailingBoitage($docMailingBoitage)
    {
        $this->docMailingBoitage = $docMailingBoitage;
    
        return $this;
    }

    /**
     * Get docMailingBoitage
     *
     * @return float 
     */
    public function getDocMailingBoitage()
    {
        return $this->docMailingBoitage;
    }

    /**
     * Set dateDocFppoProduits
     *
     * @param string $dateDocFppoProduits
     * @return ClientsSage
     */
    public function setDateDocFppoProduits($dateDocFppoProduits)
    {
        $this->dateDocFppoProduits = $dateDocFppoProduits;
    
        return $this;
    }

    /**
     * Get dateDocFppoProduits
     *
     * @return string 
     */
    public function getDateDocFppoProduits()
    {
        return $this->dateDocFppoProduits;
    }

    /**
     * Set dateDocFppoEntreprises
     *
     * @param string $dateDocFppoEntreprises
     * @return ClientsSage
     */
    public function setDateDocFppoEntreprises($dateDocFppoEntreprises)
    {
        $this->dateDocFppoEntreprises = $dateDocFppoEntreprises;
    
        return $this;
    }

    /**
     * Get dateDocFppoEntreprises
     *
     * @return string 
     */
    public function getDateDocFppoEntreprises()
    {
        return $this->dateDocFppoEntreprises;
    }

    /**
     * Set dateDocFppoPe
     *
     * @param string $dateDocFppoPe
     * @return ClientsSage
     */
    public function setDateDocFppoPe($dateDocFppoPe)
    {
        $this->dateDocFppoPe = $dateDocFppoPe;
    
        return $this;
    }

    /**
     * Get dateDocFppoPe
     *
     * @return string 
     */
    public function getDateDocFppoPe()
    {
        return $this->dateDocFppoPe;
    }

    /**
     * Set dateDocValises
     *
     * @param string $dateDocValises
     * @return ClientsSage
     */
    public function setDateDocValises($dateDocValises)
    {
        $this->dateDocValises = $dateDocValises;
    
        return $this;
    }

    /**
     * Get dateDocValises
     *
     * @return string 
     */
    public function getDateDocValises()
    {
        return $this->dateDocValises;
    }

    /**
     * Set dateDocBarrettesCouleurs
     *
     * @param string $dateDocBarrettesCouleurs
     * @return ClientsSage
     */
    public function setDateDocBarrettesCouleurs($dateDocBarrettesCouleurs)
    {
        $this->dateDocBarrettesCouleurs = $dateDocBarrettesCouleurs;
    
        return $this;
    }

    /**
     * Get dateDocBarrettesCouleurs
     *
     * @return string 
     */
    public function getDateDocBarrettesCouleurs()
    {
        return $this->dateDocBarrettesCouleurs;
    }

    /**
     * Set dateDocMailingBoitage
     *
     * @param string $dateDocMailingBoitage
     * @return ClientsSage
     */
    public function setDateDocMailingBoitage($dateDocMailingBoitage)
    {
        $this->dateDocMailingBoitage = $dateDocMailingBoitage;
    
        return $this;
    }

    /**
     * Get dateDocMailingBoitage
     *
     * @return string 
     */
    public function getDateDocMailingBoitage()
    {
        return $this->dateDocMailingBoitage;
    }

    /**
     * Set observationsTtc
     *
     * @param string $observationsTtc
     * @return ClientsSage
     */
    public function setObservationsTtc($observationsTtc)
    {
        $this->observationsTtc = $observationsTtc;
    
        return $this;
    }

    /**
     * Get observationsTtc
     *
     * @return string 
     */
    public function getObservationsTtc()
    {
        return $this->observationsTtc;
    }

    /**
     * Set observationsGestion
     *
     * @param string $observationsGestion
     * @return ClientsSage
     */
    public function setObservationsGestion($observationsGestion)
    {
        $this->observationsGestion = $observationsGestion;
    
        return $this;
    }

    /**
     * Get observationsGestion
     *
     * @return string 
     */
    public function getObservationsGestion()
    {
        return $this->observationsGestion;
    }

    /**
     * Set communicationMail
     *
     * @param float $communicationMail
     * @return ClientsSage
     */
    public function setCommunicationMail($communicationMail)
    {
        $this->communicationMail = $communicationMail;
    
        return $this;
    }

    /**
     * Get communicationMail
     *
     * @return float 
     */
    public function getCommunicationMail()
    {
        return $this->communicationMail;
    }

    /**
     * Set communicationFax
     *
     * @param float $communicationFax
     * @return ClientsSage
     */
    public function setCommunicationFax($communicationFax)
    {
        $this->communicationFax = $communicationFax;
    
        return $this;
    }

    /**
     * Get communicationFax
     *
     * @return float 
     */
    public function getCommunicationFax()
    {
        return $this->communicationFax;
    }

    /**
     * Set tva
     *
     * @param float $tva
     * @return ClientsSage
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    
        return $this;
    }

    /**
     * Get tva
     *
     * @return float 
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set particulier
     *
     * @param float $particulier
     * @return ClientsSage
     */
    public function setParticulier($particulier)
    {
        $this->particulier = $particulier;
    
        return $this;
    }

    /**
     * Get particulier
     *
     * @return float 
     */
    public function getParticulier()
    {
        return $this->particulier;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return ClientsSage
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;
    
        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string 
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set remise
     *
     * @param float $remise
     * @return ClientsSage
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;
    
        return $this;
    }

    /**
     * Get remise
     *
     * @return float 
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set dateRemise
     *
     * @param string $dateRemise
     * @return ClientsSage
     */
    public function setDateRemise($dateRemise)
    {
        $this->dateRemise = $dateRemise;
    
        return $this;
    }

    /**
     * Get dateRemise
     *
     * @return string 
     */
    public function getDateRemise()
    {
        return $this->dateRemise;
    }

    /**
     * Set dateLivraison
     *
     * @param string $dateLivraison
     * @return ClientsSage
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;
    
        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return string 
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set dateWeb
     *
     * @param string $dateWeb
     * @return ClientsSage
     */
    public function setDateWeb($dateWeb)
    {
        $this->dateWeb = $dateWeb;
    
        return $this;
    }

    /**
     * Get dateWeb
     *
     * @return string 
     */
    public function getDateWeb()
    {
        return $this->dateWeb;
    }

    /**
     * Set dateContact1
     *
     * @param string $dateContact1
     * @return ClientsSage
     */
    public function setDateContact1($dateContact1)
    {
        $this->dateContact1 = $dateContact1;
    
        return $this;
    }

    /**
     * Get dateContact1
     *
     * @return string 
     */
    public function getDateContact1()
    {
        return $this->dateContact1;
    }

    /**
     * Set dateContact2
     *
     * @param string $dateContact2
     * @return ClientsSage
     */
    public function setDateContact2($dateContact2)
    {
        $this->dateContact2 = $dateContact2;
    
        return $this;
    }

    /**
     * Get dateContact2
     *
     * @return string 
     */
    public function getDateContact2()
    {
        return $this->dateContact2;
    }

    /**
     * Set dateContact3
     *
     * @param string $dateContact3
     * @return ClientsSage
     */
    public function setDateContact3($dateContact3)
    {
        $this->dateContact3 = $dateContact3;
    
        return $this;
    }

    /**
     * Get dateContact3
     *
     * @return string 
     */
    public function getDateContact3()
    {
        return $this->dateContact3;
    }

    /**
     * Set dateContact4
     *
     * @param string $dateContact4
     * @return ClientsSage
     */
    public function setDateContact4($dateContact4)
    {
        $this->dateContact4 = $dateContact4;
    
        return $this;
    }

    /**
     * Get dateContact4
     *
     * @return string 
     */
    public function getDateContact4()
    {
        return $this->dateContact4;
    }

    /**
     * Set dateContact5
     *
     * @param string $dateContact5
     * @return ClientsSage
     */
    public function setDateContact5($dateContact5)
    {
        $this->dateContact5 = $dateContact5;
    
        return $this;
    }

    /**
     * Get dateContact5
     *
     * @return string 
     */
    public function getDateContact5()
    {
        return $this->dateContact5;
    }

    /**
     * Set dateInfoCommerce
     *
     * @param string $dateInfoCommerce
     * @return ClientsSage
     */
    public function setDateInfoCommerce($dateInfoCommerce)
    {
        $this->dateInfoCommerce = $dateInfoCommerce;
    
        return $this;
    }

    /**
     * Get dateInfoCommerce
     *
     * @return string 
     */
    public function getDateInfoCommerce()
    {
        return $this->dateInfoCommerce;
    }

    /**
     * Set dateDocumentations
     *
     * @param string $dateDocumentations
     * @return ClientsSage
     */
    public function setDateDocumentations($dateDocumentations)
    {
        $this->dateDocumentations = $dateDocumentations;
    
        return $this;
    }

    /**
     * Get dateDocumentations
     *
     * @return string 
     */
    public function getDateDocumentations()
    {
        return $this->dateDocumentations;
    }

    /**
     * Set dateObservationsCommerce
     *
     * @param string $dateObservationsCommerce
     * @return ClientsSage
     */
    public function setDateObservationsCommerce($dateObservationsCommerce)
    {
        $this->dateObservationsCommerce = $dateObservationsCommerce;
    
        return $this;
    }

    /**
     * Get dateObservationsCommerce
     *
     * @return string 
     */
    public function getDateObservationsCommerce()
    {
        return $this->dateObservationsCommerce;
    }

    /**
     * Set dateObservationsTransport
     *
     * @param string $dateObservationsTransport
     * @return ClientsSage
     */
    public function setDateObservationsTransport($dateObservationsTransport)
    {
        $this->dateObservationsTransport = $dateObservationsTransport;
    
        return $this;
    }

    /**
     * Get dateObservationsTransport
     *
     * @return string 
     */
    public function getDateObservationsTransport()
    {
        return $this->dateObservationsTransport;
    }

    /**
     * Set dateObservationsTtc
     *
     * @param string $dateObservationsTtc
     * @return ClientsSage
     */
    public function setDateObservationsTtc($dateObservationsTtc)
    {
        $this->dateObservationsTtc = $dateObservationsTtc;
    
        return $this;
    }

    /**
     * Get dateObservationsTtc
     *
     * @return string 
     */
    public function getDateObservationsTtc()
    {
        return $this->dateObservationsTtc;
    }

    /**
     * Set dateObservationsComptabilite
     *
     * @param string $dateObservationsComptabilite
     * @return ClientsSage
     */
    public function setDateObservationsComptabilite($dateObservationsComptabilite)
    {
        $this->dateObservationsComptabilite = $dateObservationsComptabilite;
    
        return $this;
    }

    /**
     * Get dateObservationsComptabilite
     *
     * @return string 
     */
    public function getDateObservationsComptabilite()
    {
        return $this->dateObservationsComptabilite;
    }
}