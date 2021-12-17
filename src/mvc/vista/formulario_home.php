<?php

try {
    require_once __DIR__ . "/../controlador/UserController.php";

    $userController = new UserController();
    $userController->formHomePage();
} catch (Exception $e) {
    echo "Error!: " . $e->getMessage();
}
