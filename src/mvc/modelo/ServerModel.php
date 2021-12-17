<?php

require_once __DIR__ . "/ModelController.php";

class ServerModel extends DataBase
{
    public function validateUser($user = "", $password = "")
    {
        return ($user == "juan" && $password == "roa");
    }

    public function hola(){
        echo "llamada a funcion ServerModel::hola()<br>";
    }
}
