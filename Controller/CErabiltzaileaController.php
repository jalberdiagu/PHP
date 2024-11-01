<?php

namespace Controller;

use Model\Erabiltzailea;
use Controller\CaballeroController; 

require_once __DIR__ . '/../Model/MCaballero.php';
require_once __DIR__ . '/../Model/MErabiltzaileak.php';


class ErabiltzaileaController {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $erabiltzailea = $_POST['erabiltzailea'];
            $pasahitza = $_POST['pasahitza'];

            $erab = new Erabiltzailea();
            $usuario = $erab->login($erabiltzailea, $pasahitza);
            
            if ($usuario) { 
                session_start();
                $_SESSION['erab'] = $usuario;

                if ($usuario['cargo'] == 'cliente') {
                    $caballeroController = new CaballeroController();
                    $caballeroController->caballeroGuztiak(); 
                    exit;
                } else {
                    header('Location: /MesaCuadrada/Views/trabajador.php');
                }
                exit;
            } else {
                echo "<div class='alert alert-danger text-center'>Erabiltzailea edo pasahitza txarto daude!</div>";
            }
        }
        require __DIR__ . '/../Views/login.php';  
    }

}//Klasearen amaiera


?>