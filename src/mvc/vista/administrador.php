<?php

/*
foreach($_SERVER as $column => $value){
    echo "$column => $value <br>";
}
*/


//
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');

    //This excecutes if theres not a succesful login
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $link = "https";
    } else {
        $link = "http";
    }

    // Here append the common URL characters.
    $link .= "://";

    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL 
    $scrpt = $_SERVER['SCRIPT_NAME'];
    $link .= substr($scrpt, "0", strlen($scrpt) - 21);
    //echo "Redireccionando a $link";
    echo '<script>window.location.replace("' . $link . '");</script>';
    exit;
} else {

    require_once __DIR__ . "/../controlador/ServerController.php";

    $userController = new ServerController();
    $userController->serverAuthentication($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
}
