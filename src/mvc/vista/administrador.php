<?php

/*
foreach ($_SERVER as $column => $value) {
    echo "<strong>$column</strong> => $value <br>";
}
echo "<hr>";
foreach ($_GET as $column => $value) {
    echo "<strong>$column</strong> => $value <br>";
}
*/

if (isset($_GET["key"])) {
    $string = $_GET["key"];
    if ($string == "close") {
        closelog();
    }
}

require_once __DIR__ . "/../controlador/ServerController.php";

$userController = new ServerController();


