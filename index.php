<?php

require_once __DIR__ . '/Model/Konexioa.php';
require_once __DIR__ . '/Model/MErabiltzaileak.php';
require_once __DIR__ . '/Controller/CErabiltzaileaController.php';

use Controller\ErabiltzaileaController;

$controller = new ErabiltzaileaController();
$controller->login();
?>