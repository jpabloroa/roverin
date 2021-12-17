<?php

/*
session_start();



foreach ($_SERVER as $column => $value) {
    echo "<strong>$column</strong> => $value <br>";
}
echo "<hr>";
foreach ($_SESSION as $column => $value) {
    echo "<strong>$column</strong> => $value <br>";
}
echo "<hr>";
*/

/*
if (isset($_GET["key"])) {
    if ($_GET["key"] == "close") {
        echo "pericolindo";
    }
}
*/
require_once __DIR__ . "/../controlador/ServerController.php";


/*$array =  (isset($_SERVER["PATH_INFO"])) ? explode("/", str_replace("/&access", "/", $_SERVER["PATH_INFO"])) : ["/", ""];

foreach ($array as $num => $val) {
    echo "Valor " . $num . ":" . $val . "<br>";
}
*/
echo "ola";
$userController = new ServerController();
