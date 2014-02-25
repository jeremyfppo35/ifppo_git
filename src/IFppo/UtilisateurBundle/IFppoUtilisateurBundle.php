<?php

namespace IFppo\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IFppoUtilisateurBundle extends Bundle {

   public function getParent() {
        return 'FOSUserBundle';
    }
}