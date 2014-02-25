<?php

namespace IFppo\CommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 */
class Clients
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
     * @var float
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
    private $adresse1Facturation;

    /**
     * @var string
     */
    private $adresse2Facturation;

    /**
     * @var string
     */
    private $cpFacturation;

    /**
     * @var string
     */
    private $villeFacturation;

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
     * @var float
     */
    private $remise1;

    /**
     * @var string
     */
    private $dateRemise1;

    /**
     * @var float
     */
    private $remise2;

    /**
     * @var string
     */
    private $dateRemise2;

    /**
     * @var float
     */
    private $remise3;

    /**
     * @var string
     */
    private $dateRemise3;

    /**
     * @var float
     */
    private $remise4;

    /**
     * @var string
     */
    private $dateRemise4;

    /**
     * @var float
     */
    private $remise5;

    /**
     * @var string
     */
    private $dateRemise5;

    /**
     * @var float
     */
    private $remise6;

    /**
     * @var string
     */
    private $dateRemise6;

    /**
     * @var float
     */
    private $remise7;

    /**
     * @var string
     */
    private $dateRemise7;

    /**
     * @var float
     */
    private $remise8;

    /**
     * @var string
     */
    private $dateRemise8;

    /**
     * @var float
     */
    private $remise9;

    /**
     * @var string
     */
    private $dateRemise9;

    /**
     * @var float
     */
    private $remise10;

    /**
     * @var string
     */
    private $dateRemise10;

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
    private $observationsCommerce;

    /**
     * @var string
     */
    private $siret;

    /**
     * @var string
     */
    private $assurance;

    /**
     * @var string
     */
    private $modeReglement;

    /**
     * @var string
     */
    private $delaiPaiement;

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
     * @var string
     */
    private $escompte;

    /**
     * @var float
     */
    private $tauxEscompte;

    /**
     * @var float
     */
    private $tva;

    /**
     * @var float
     */
    private $particulier;

    /**
     * @var integer
     */
    private $blocage;

    /**
     * @var string
     */
    private $ribEtablissement;

    /**
     * @var string
     */
    private $ribGuichet;

    /**
     * @var string
     */
    private $ribCompte;

    /**
     * @var string
     */
    private $ribCle;

    /**
     * @var string
     */
    private $ribIban;

    /**
     * @var string
     */
    private $ribBic;

    /**
     * @var string
     */
    private $ribDomiciliation;

    /**
     * @var string
     */
    private $siteWeb;


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
     * @return Clients
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
     * @return Clients
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
     * @param float $codeClient
     * @return Clients
     */
    public function setCodeClient($codeClient)
    {
        $this->codeClient = $codeClient;
    
        return $this;
    }

    /**
     * Get codeClient
     *
     * @return float 
     */
    public function getCodeClient()
    {
        return $this->codeClient;
    }

    /**
     * Set clientActif
     *
     * @param float $clientActif
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * Set adresse1Facturation
     *
     * @param string $adresse1Facturation
     * @return Clients
     */
    public function setAdresse1Facturation($adresse1Facturation)
    {
        $this->adresse1Facturation = $adresse1Facturation;
    
        return $this;
    }

    /**
     * Get adresse1Facturation
     *
     * @return string 
     */
    public function getAdresse1Facturation()
    {
        return $this->adresse1Facturation;
    }

    /**
     * Set adresse2Facturation
     *
     * @param string $adresse2Facturation
     * @return Clients
     */
    public function setAdresse2Facturation($adresse2Facturation)
    {
        $this->adresse2Facturation = $adresse2Facturation;
    
        return $this;
    }

    /**
     * Get adresse2Facturation
     *
     * @return string 
     */
    public function getAdresse2Facturation()
    {
        return $this->adresse2Facturation;
    }

    /**
     * Set cpFacturation
     *
     * @param string $cpFacturation
     * @return Clients
     */
    public function setCpFacturation($cpFacturation)
    {
        $this->cpFacturation = $cpFacturation;
    
        return $this;
    }

    /**
     * Get cpFacturation
     *
     * @return string 
     */
    public function getCpFacturation()
    {
        return $this->cpFacturation;
    }

    /**
     * Set villeFacturation
     *
     * @param string $villeFacturation
     * @return Clients
     */
    public function setVilleFacturation($villeFacturation)
    {
        $this->villeFacturation = $villeFacturation;
    
        return $this;
    }

    /**
     * Get villeFacturation
     *
     * @return string 
     */
    public function getVilleFacturation()
    {
        return $this->villeFacturation;
    }

    /**
     * Set adresse1Livraison
     *
     * @param string $adresse1Livraison
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * Set remise1
     *
     * @param float $remise1
     * @return Clients
     */
    public function setRemise1($remise1)
    {
        $this->remise1 = $remise1;
    
        return $this;
    }

    /**
     * Get remise1
     *
     * @return float 
     */
    public function getRemise1()
    {
        return $this->remise1;
    }

    /**
     * Set dateRemise1
     *
     * @param string $dateRemise1
     * @return Clients
     */
    public function setDateRemise1($dateRemise1)
    {
        $this->dateRemise1 = $dateRemise1;
    
        return $this;
    }

    /**
     * Get dateRemise1
     *
     * @return string 
     */
    public function getDateRemise1()
    {
        return $this->dateRemise1;
    }

    /**
     * Set remise2
     *
     * @param float $remise2
     * @return Clients
     */
    public function setRemise2($remise2)
    {
        $this->remise2 = $remise2;
    
        return $this;
    }

    /**
     * Get remise2
     *
     * @return float 
     */
    public function getRemise2()
    {
        return $this->remise2;
    }

    /**
     * Set dateRemise2
     *
     * @param string $dateRemise2
     * @return Clients
     */
    public function setDateRemise2($dateRemise2)
    {
        $this->dateRemise2 = $dateRemise2;
    
        return $this;
    }

    /**
     * Get dateRemise2
     *
     * @return string 
     */
    public function getDateRemise2()
    {
        return $this->dateRemise2;
    }

    /**
     * Set remise3
     *
     * @param float $remise3
     * @return Clients
     */
    public function setRemise3($remise3)
    {
        $this->remise3 = $remise3;
    
        return $this;
    }

    /**
     * Get remise3
     *
     * @return float 
     */
    public function getRemise3()
    {
        return $this->remise3;
    }

    /**
     * Set dateRemise3
     *
     * @param string $dateRemise3
     * @return Clients
     */
    public function setDateRemise3($dateRemise3)
    {
        $this->dateRemise3 = $dateRemise3;
    
        return $this;
    }

    /**
     * Get dateRemise3
     *
     * @return string 
     */
    public function getDateRemise3()
    {
        return $this->dateRemise3;
    }

    /**
     * Set remise4
     *
     * @param float $remise4
     * @return Clients
     */
    public function setRemise4($remise4)
    {
        $this->remise4 = $remise4;
    
        return $this;
    }

    /**
     * Get remise4
     *
     * @return float 
     */
    public function getRemise4()
    {
        return $this->remise4;
    }

    /**
     * Set dateRemise4
     *
     * @param string $dateRemise4
     * @return Clients
     */
    public function setDateRemise4($dateRemise4)
    {
        $this->dateRemise4 = $dateRemise4;
    
        return $this;
    }

    /**
     * Get dateRemise4
     *
     * @return string 
     */
    public function getDateRemise4()
    {
        return $this->dateRemise4;
    }

    /**
     * Set remise5
     *
     * @param float $remise5
     * @return Clients
     */
    public function setRemise5($remise5)
    {
        $this->remise5 = $remise5;
    
        return $this;
    }

    /**
     * Get remise5
     *
     * @return float 
     */
    public function getRemise5()
    {
        return $this->remise5;
    }

    /**
     * Set dateRemise5
     *
     * @param string $dateRemise5
     * @return Clients
     */
    public function setDateRemise5($dateRemise5)
    {
        $this->dateRemise5 = $dateRemise5;
    
        return $this;
    }

    /**
     * Get dateRemise5
     *
     * @return string 
     */
    public function getDateRemise5()
    {
        return $this->dateRemise5;
    }

    /**
     * Set remise6
     *
     * @param float $remise6
     * @return Clients
     */
    public function setRemise6($remise6)
    {
        $this->remise6 = $remise6;
    
        return $this;
    }

    /**
     * Get remise6
     *
     * @return float 
     */
    public function getRemise6()
    {
        return $this->remise6;
    }

    /**
     * Set dateRemise6
     *
     * @param string $dateRemise6
     * @return Clients
     */
    public function setDateRemise6($dateRemise6)
    {
        $this->dateRemise6 = $dateRemise6;
    
        return $this;
    }

    /**
     * Get dateRemise6
     *
     * @return string 
     */
    public function getDateRemise6()
    {
        return $this->dateRemise6;
    }

    /**
     * Set remise7
     *
     * @param float $remise7
     * @return Clients
     */
    public function setRemise7($remise7)
    {
        $this->remise7 = $remise7;
    
        return $this;
    }

    /**
     * Get remise7
     *
     * @return float 
     */
    public function getRemise7()
    {
        return $this->remise7;
    }

    /**
     * Set dateRemise7
     *
     * @param string $dateRemise7
     * @return Clients
     */
    public function setDateRemise7($dateRemise7)
    {
        $this->dateRemise7 = $dateRemise7;
    
        return $this;
    }

    /**
     * Get dateRemise7
     *
     * @return string 
     */
    public function getDateRemise7()
    {
        return $this->dateRemise7;
    }

    /**
     * Set remise8
     *
     * @param float $remise8
     * @return Clients
     */
    public function setRemise8($remise8)
    {
        $this->remise8 = $remise8;
    
        return $this;
    }

    /**
     * Get remise8
     *
     * @return float 
     */
    public function getRemise8()
    {
        return $this->remise8;
    }

    /**
     * Set dateRemise8
     *
     * @param string $dateRemise8
     * @return Clients
     */
    public function setDateRemise8($dateRemise8)
    {
        $this->dateRemise8 = $dateRemise8;
    
        return $this;
    }

    /**
     * Get dateRemise8
     *
     * @return string 
     */
    public function getDateRemise8()
    {
        return $this->dateRemise8;
    }

    /**
     * Set remise9
     *
     * @param float $remise9
     * @return Clients
     */
    public function setRemise9($remise9)
    {
        $this->remise9 = $remise9;
    
        return $this;
    }

    /**
     * Get remise9
     *
     * @return float 
     */
    public function getRemise9()
    {
        return $this->remise9;
    }

    /**
     * Set dateRemise9
     *
     * @param string $dateRemise9
     * @return Clients
     */
    public function setDateRemise9($dateRemise9)
    {
        $this->dateRemise9 = $dateRemise9;
    
        return $this;
    }

    /**
     * Get dateRemise9
     *
     * @return string 
     */
    public function getDateRemise9()
    {
        return $this->dateRemise9;
    }

    /**
     * Set remise10
     *
     * @param float $remise10
     * @return Clients
     */
    public function setRemise10($remise10)
    {
        $this->remise10 = $remise10;
    
        return $this;
    }

    /**
     * Get remise10
     *
     * @return float 
     */
    public function getRemise10()
    {
        return $this->remise10;
    }

    /**
     * Set dateRemise10
     *
     * @param string $dateRemise10
     * @return Clients
     */
    public function setDateRemise10($dateRemise10)
    {
        $this->dateRemise10 = $dateRemise10;
    
        return $this;
    }

    /**
     * Get dateRemise10
     *
     * @return string 
     */
    public function getDateRemise10()
    {
        return $this->dateRemise10;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * Set observationsCommerce
     *
     * @param string $observationsCommerce
     * @return Clients
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
     * Set siret
     *
     * @param string $siret
     * @return Clients
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    
        return $this;
    }

    /**
     * Get siret
     *
     * @return string 
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set assurance
     *
     * @param string $assurance
     * @return Clients
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;
    
        return $this;
    }

    /**
     * Get assurance
     *
     * @return string 
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Set modeReglement
     *
     * @param string $modeReglement
     * @return Clients
     */
    public function setModeReglement($modeReglement)
    {
        $this->modeReglement = $modeReglement;
    
        return $this;
    }

    /**
     * Get modeReglement
     *
     * @return string 
     */
    public function getModeReglement()
    {
        return $this->modeReglement;
    }

    /**
     * Set delaiPaiement
     *
     * @param string $delaiPaiement
     * @return Clients
     */
    public function setDelaiPaiement($delaiPaiement)
    {
        $this->delaiPaiement = $delaiPaiement;
    
        return $this;
    }

    /**
     * Get delaiPaiement
     *
     * @return string 
     */
    public function getDelaiPaiement()
    {
        return $this->delaiPaiement;
    }

    /**
     * Set observationsTransport
     *
     * @param string $observationsTransport
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * @return Clients
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
     * Set escompte
     *
     * @param string $escompte
     * @return Clients
     */
    public function setEscompte($escompte)
    {
        $this->escompte = $escompte;
    
        return $this;
    }

    /**
     * Get escompte
     *
     * @return string 
     */
    public function getEscompte()
    {
        return $this->escompte;
    }

    /**
     * Set tauxEscompte
     *
     * @param float $tauxEscompte
     * @return Clients
     */
    public function setTauxEscompte($tauxEscompte)
    {
        $this->tauxEscompte = $tauxEscompte;
    
        return $this;
    }

    /**
     * Get tauxEscompte
     *
     * @return float 
     */
    public function getTauxEscompte()
    {
        return $this->tauxEscompte;
    }

    /**
     * Set tva
     *
     * @param float $tva
     * @return Clients
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
     * @return Clients
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
     * Set blocage
     *
     * @param integer $blocage
     * @return Clients
     */
    public function setBlocage($blocage)
    {
        $this->blocage = $blocage;
    
        return $this;
    }

    /**
     * Get blocage
     *
     * @return integer 
     */
    public function getBlocage()
    {
        return $this->blocage;
    }

    /**
     * Set ribEtablissement
     *
     * @param string $ribEtablissement
     * @return Clients
     */
    public function setRibEtablissement($ribEtablissement)
    {
        $this->ribEtablissement = $ribEtablissement;
    
        return $this;
    }

    /**
     * Get ribEtablissement
     *
     * @return string 
     */
    public function getRibEtablissement()
    {
        return $this->ribEtablissement;
    }

    /**
     * Set ribGuichet
     *
     * @param string $ribGuichet
     * @return Clients
     */
    public function setRibGuichet($ribGuichet)
    {
        $this->ribGuichet = $ribGuichet;
    
        return $this;
    }

    /**
     * Get ribGuichet
     *
     * @return string 
     */
    public function getRibGuichet()
    {
        return $this->ribGuichet;
    }

    /**
     * Set ribCompte
     *
     * @param string $ribCompte
     * @return Clients
     */
    public function setRibCompte($ribCompte)
    {
        $this->ribCompte = $ribCompte;
    
        return $this;
    }

    /**
     * Get ribCompte
     *
     * @return string 
     */
    public function getRibCompte()
    {
        return $this->ribCompte;
    }

    /**
     * Set ribCle
     *
     * @param string $ribCle
     * @return Clients
     */
    public function setRibCle($ribCle)
    {
        $this->ribCle = $ribCle;
    
        return $this;
    }

    /**
     * Get ribCle
     *
     * @return string 
     */
    public function getRibCle()
    {
        return $this->ribCle;
    }

    /**
     * Set ribIban
     *
     * @param string $ribIban
     * @return Clients
     */
    public function setRibIban($ribIban)
    {
        $this->ribIban = $ribIban;
    
        return $this;
    }

    /**
     * Get ribIban
     *
     * @return string 
     */
    public function getRibIban()
    {
        return $this->ribIban;
    }

    /**
     * Set ribBic
     *
     * @param string $ribBic
     * @return Clients
     */
    public function setRibBic($ribBic)
    {
        $this->ribBic = $ribBic;
    
        return $this;
    }

    /**
     * Get ribBic
     *
     * @return string 
     */
    public function getRibBic()
    {
        return $this->ribBic;
    }

    /**
     * Set ribDomiciliation
     *
     * @param string $ribDomiciliation
     * @return Clients
     */
    public function setRibDomiciliation($ribDomiciliation)
    {
        $this->ribDomiciliation = $ribDomiciliation;
    
        return $this;
    }

    /**
     * Get ribDomiciliation
     *
     * @return string 
     */
    public function getRibDomiciliation()
    {
        return $this->ribDomiciliation;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return Clients
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
}