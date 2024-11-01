<?php

namespace Controller;

use Model\Caballero;

class CaballeroController {
    
    public function caballeroGuztiak() {
        $caba = new Caballero();
        $ac = $caba->selectCaballeroGuztiak(); 
        include_once(__DIR__ . '/../Views/cliente.php'); 
    }
    
}//Klasearen amaiera

?>