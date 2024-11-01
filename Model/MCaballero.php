<?php

namespace Model;
require_once("Konexioa.php");

class Caballero extends Konexioa {
    public function selectCaballeroGuztiak() {
        $statement = "SELECT * FROM caballero";
        $erantzuna = $this->getKon()->query($statement);
        
        $caballeroGuztiak = [];

        while($row = $erantzuna->fetch_assoc()) {
            $caballeroGuztiak[] = $row;
        }
        return $caballeroGuztiak;
    }
}//Klasearen amaiera

?>
