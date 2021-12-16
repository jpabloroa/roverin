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
    $_REQUEST["error"] = "404";

    //
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
    $rqst_uri = $_SERVER['SCRIPT_NAME'];
    $link .= substr($rqst_uri, "0", strlen($rqst_uri) - 21);
    //echo "Redireccionando a $link";
    include($rqst_uri);

    //
    //header("location: $link");
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
