<?php

require_once __DIR__ . "../controlador/UserController.php";

$userController = new UserController();
$userController->formHomePage();
