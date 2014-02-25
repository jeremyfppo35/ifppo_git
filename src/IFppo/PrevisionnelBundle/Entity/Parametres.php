<?php

namespace IFppo\PrevisionnelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Parametres
 *
 * @author jeremy.denieul
 */
class Parametres {
    
    private $id;
    private $semaineProd;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getSemaineProd() {
        return $this->semaineProd;
    }

    public function setSemaineProd($semaineProd) {
        $this->semaineProd = $semaineProd;
    }
    
}

?>
