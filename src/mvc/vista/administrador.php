<?php


session_start();



foreach ($_SERVER as $column => $value) {
    echo "<strong>$column</strong> => $value <br>";
}
echo "<hr>";
foreach ($_SESSION as $column => $value) {
    echo "<strong>$column</strong> => $value <br>";
}
echo "<hr>";


/*
if (isset($_GET["key"])) {
    if ($_GET["key"] == "close") {
        echo "pericolindo";
    }
}
*/
require_once __DIR__ . "/../controlador/ServerController.php";
$_SERVER["PATH_INFO"] = "/" . $_SERVER["PATH_INFO"];
$array =  (isset($_SERVER["PATH_INFO"])) ? explode("/", str_replace("//", "/", $_SERVER["PATH_INFO"])) : ["/", ""];

foreach ($array as $val) {
    echo $val . "<br>";
}

//$userController = new ServerController();
