<?php

session_start();

foreach ($_SERVER as $column => $value) {
    echo "<strong>$column</strong> => $value <br>";
}
echo "<hr>";
foreach ($_SESSION as $column => $value) {
    echo "<strong>$column</strong> => $value <br>";
}


/*
if (isset($_GET["key"])) {
    if ($_GET["key"] == "close") {
        echo "pericolindo";
    }
}

require_once __DIR__ . "/../controlador/ServerController.php";

$userController = new ServerController();
*/