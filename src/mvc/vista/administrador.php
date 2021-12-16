<?php

//
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    $_REQUEST["error"] = "404";
    //include(__DIR__ . "/../../" . self::$errorRoutes["404"]);

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
    $link .= $_SERVER['REQUEST_URI'];
    echo "Redireccionando a $link";

    //
    //header("location: $link");
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
