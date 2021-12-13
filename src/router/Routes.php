<?php

require_once __DIR__ . "/../meta/php/Router.php";

Route::add("/", "/public/index.html");
Route::add("/home", "/mvc/vista/inicio.php");
Route::add("/peri", "/mvc/vista/inicio.php");
Route::add("/pai", "/mvc/vista/inicio.php");
Route::add("/route", "/mvc/vista/inicio.php");

Route::addError("404", "/pages/error.php");

Route::submit();
