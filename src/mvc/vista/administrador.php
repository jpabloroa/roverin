<?php

/*
foreach($_SERVER as $column => $value){
    echo "$column => $value <br>";
}
*/

require_once __DIR__ . "/../controlador/ServerController.php";

$userController = new ServerController();
$userController->serverAuthentication();
