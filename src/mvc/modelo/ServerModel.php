<?php

require_once __DIR__ . "/ModelController.php";

class ServerModel extends DataBase
{
    public function validateUser($user = "", $password = "")
    {
        return ($user == "jroa" && $password == "Nad95037");
    }

    public function hola(){
        echo "llamada a funcion ServerModel::hola()<br>";
    }
}
