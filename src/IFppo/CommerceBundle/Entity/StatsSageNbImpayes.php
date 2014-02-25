<?php

namespace IFppo\CommerceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of StatsSageNbImpayes
 *
 * @author jeremy.denieul
 */
class StatsSageNbImpayes {
    
    private $nbImpayes;
    private $ctNum;
    
    public function getNbImpayes() {
        return $this->nbImpayes;
    }

    public function setNbImpayes($nbImpayes) {
        $this->nbImpayes = $nbImpayes;
    }

    public function getCtNum() {
        return $this->ctNum;
    }

    public function setCtNum($ctNum) {
        $this->ctNum = $ctNum;
    }


}

?>
