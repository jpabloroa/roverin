<?php

echo "loco";
require_once __DIR__ . "/../meta/php/Router.php";

Route::add("/", "/pages/html/home/home.php");
Route::add("/login", "/pages/html/login/login.php");
Route::add("/&access", "/mvc/vista/administrador.php");

Route::addError("404", "/pages/error/error.php");
echo "loco";
Route::submit();
echo "loco";
