<?php

namespace IFppo\CommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiquestats
 */
class Historiquestats
{
    /**
     * @var integer
     */
    private $identifiant;

    /**
     * @var string
     */
    private $idclient;

    /**
     * @var float
     */
    private $janvier;

    /**
     * @var float
     */
    private $fevrier;

    /**
     * @var float
     */
    private $mars;

    /**
     * @var float
     */
    private $avril;

    /**
     * @var float
     */
    private $mai;

    /**
     * @var float
     */
    private $juin;

    /**
     * @var float
     */
    private $juillet;

    /**
     * @var float
     */
    private $aout;

    /**
     * @var float
     */
    private $septembre;

    /**
     * @var float
     */
    private $octobre;

    /**
     * @var float
     */
    private $novembre;

    /**
     * @var float
     */
    private $decembre;

    /**
     * @var integer
     */
    private $annee;


    /**
     * Get identifiant
     *
     * @return integer 
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set idclient
     *
     * @param string $idclient
     * @return Historiquestats
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;
    
        return $this;
    }

    /**
     * Get idclient
     *
     * @return string 
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set janvier
     *
     * @param float $janvier
     * @return Historiquestats
     */
    public function setJanvier($janvier)
    {
        $this->janvier = $janvier;
    
        return $this;
    }

    /**
     * Get janvier
     *
     * @return float 
     */
    public function getJanvier()
    {
        return $this->janvier;
    }

    /**
     * Set fevrier
     *
     * @param float $fevrier
     * @return Historiquestats
     */
    public function setFevrier($fevrier)
    {
        $this->fevrier = $fevrier;
    
        return $this;
    }

    /**
     * Get fevrier
     *
     * @return float 
     */
    public function getFevrier()
    {
        return $this->fevrier;
    }

    /**
     * Set mars
     *
     * @param float $mars
     * @return Historiquestats
     */
    public function setMars($mars)
    {
        $this->mars = $mars;
    
        return $this;
    }

    /**
     * Get mars
     *
     * @return float 
     */
    public function getMars()
    {
        return $this->mars;
    }

    /**
     * Set avril
     *
     * @param float $avril
     * @return Historiquestats
     */
    public function setAvril($avril)
    {
        $this->avril = $avril;
    
        return $this;
    }

    /**
     * Get avril
     *
     * @return float 
     */
    public function getAvril()
    {
        return $this->avril;
    }

    /**
     * Set mai
     *
     * @param float $mai
     * @return Historiquestats
     */
    public function setMai($mai)
    {
        $this->mai = $mai;
    
        return $this;
    }

    /**
     * Get mai
     *
     * @return float 
     */
    public function getMai()
    {
        return $this->mai;
    }

    /**
     * Set juin
     *
     * @param float $juin
     * @return Historiquestats
     */
    public function setJuin($juin)
    {
        $this->juin = $juin;
    
        return $this;
    }

    /**
     * Get juin
     *
     * @return float 
     */
    public function getJuin()
    {
        return $this->juin;
    }

    /**
     * Set juillet
     *
     * @param float $juillet
     * @return Historiquestats
     */
    public function setJuillet($juillet)
    {
        $this->juillet = $juillet;
    
        return $this;
    }

    /**
     * Get juillet
     *
     * @return float 
     */
    public function getJuillet()
    {
        return $this->juillet;
    }

    /**
     * Set aout
     *
     * @param float $aout
     * @return Historiquestats
     */
    public function setAout($aout)
    {
        $this->aout = $aout;
    
        return $this;
    }

    /**
     * Get aout
     *
     * @return float 
     */
    public function getAout()
    {
        return $this->aout;
    }

    /**
     * Set septembre
     *
     * @param float $septembre
     * @return Historiquestats
     */
    public function setSeptembre($septembre)
    {
        $this->septembre = $septembre;
    
        return $this;
    }

    /**
     * Get septembre
     *
     * @return float 
     */
    public function getSeptembre()
    {
        return $this->septembre;
    }

    /**
     * Set octobre
     *
     * @param float $octobre
     * @return Historiquestats
     */
    public function setOctobre($octobre)
    {
        $this->octobre = $octobre;
    
        return $this;
    }

    /**
     * Get octobre
     *
     * @return float 
     */
    public function getOctobre()
    {
        return $this->octobre;
    }

    /**
     * Set novembre
     *
     * @param float $novembre
     * @return Historiquestats
     */
    public function setNovembre($novembre)
    {
        $this->novembre = $novembre;
    
        return $this;
    }

    /**
     * Get novembre
     *
     * @return float 
     */
    public function getNovembre()
    {
        return $this->novembre;
    }

    /**
     * Set decembre
     *
     * @param float $decembre
     * @return Historiquestats
     */
    public function setDecembre($decembre)
    {
        $this->decembre = $decembre;
    
        return $this;
    }

    /**
     * Get decembre
     *
     * @return float 
     */
    public function getDecembre()
    {
        return $this->decembre;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Historiquestats
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }
}