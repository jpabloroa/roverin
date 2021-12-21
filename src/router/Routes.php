<?php

require_once __DIR__ . "/../meta/php/Router.php";

Route::add("/", "/pages/html/home/home.php");
//Route::add("/", "/mvc/vista/inicio.php");
Route::add("/login", "/pages/html/login/login.php");
Route::add("/&access", "/mvc/vista/administrador.php");
Route::add("/canaldigital", "/CRUD-CANAL-CUSEZAR-PHP/index.html");

Route::addError("404", "/pages/error/error.php");

Route::submit();
