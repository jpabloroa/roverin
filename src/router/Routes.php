<?php

require_once __DIR__ . "/../meta/php/Router.php";

Route::add("/", "/pages/html/home/home.php");
Route::add("/&access", "/mvc/vista/administrador.php");
Route::add("/peri", "/mvc/vista/inicio.php");
Route::add("/pai", "/mvc/vista/inicio.php");
Route::add("/route", "/mvc/vista/inicio.php");

Route::addError("404", "/pages/error/error.php");

Route::submit();
