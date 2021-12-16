<?php

/*
foreach($_SERVER as $column => $value){
    echo "$column => $value <br>";
}
*/

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');

    //This excecutes if theres not a succesful login
    echo "<h1>Viva el perico</h1>";
    //$this->redirectToIndex();
} else {

    require_once __DIR__ . "/../modelo/ServerModel.php";

    if (isset($_SERVER["PHP_AUTH_USER"]) && $_SERVER["PHP_AUTH_USER"] != "" && isset($_SERVER["PHP_AUTH_PW"]) && $_SERVER["PHP_AUTH_PW"] != "") {
        /*
        $serverController = new ServerModel();
        if ($serverController->validateUser(
            $this->bindParams(["'", "=", "/", "\\"], $_SERVER["PHP_AUTH_USER"]),
            $this->bindParams(["'", "=", "/", "\\"], $_SERVER["PHP_AUTH_PW"])
        )) {
            $this->sendOutput(202, [], ["Accepted"], "Bienvenido " . $_SERVER["PHP_AUTH_USER"]);
        } else {
            //$this->redirectToIndex();
            echo "<h1>No hay credenciales</h1>";
        }*/
        echo "<h1>Re loco " . $_SERVER["PHP_AUTH_USER"] . "</h1>";
    } else {
        echo "<h1>Re loco</h1>";
    }
}

/*require_once __DIR__ . "/../controlador/ServerController.php";

$userController = new ServerController();
$userController->serverAuthentication();*/
