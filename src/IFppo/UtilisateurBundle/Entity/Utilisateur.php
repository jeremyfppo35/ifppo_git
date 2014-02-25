<?php

namespace IFppo\UtilisateurBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * Description of Utilisateur
 *
 * @author jeremy.denieul
 */
class Utilisateur extends BaseUser {
    
    protected $id;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

}

?>
