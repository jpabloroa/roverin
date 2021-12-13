<?php

require_once __DIR__ . "/../meta/php/Router.php";

Route::add(["/home" => "/mvc/vista/inicio.php"]);

Route::addError(["404" => "/pages/error.php"]);

Route::submit();
