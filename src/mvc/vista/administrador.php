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
    include(__DIR__ . "../../router/Routes.php");
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
