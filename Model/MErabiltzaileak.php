<?php

namespace Model;

require_once("Konexioa.php");

class Erabiltzailea extends Konexioa {

    public function login($erabiltzailea, $pasahitza) {
        $statement = $this->getKon()->prepare("SELECT * FROM erabiltzaileak WHERE erabiltzailea = ?");
        $statement->bind_param("s", $erabiltzailea);
        $statement->execute();

        $result = $statement->get_result();
        $erab = $result->fetch_assoc();

        if($erab && $pasahitza === $erab['pasahitza']) {
            return $erab;
        }
        return false;
    }

}//Klasearen amaiera 

?>