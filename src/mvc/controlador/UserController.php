<?php

require_once __DIR__ . "/BaseController.php";

class UserController extends BaseController
{
    private $httpMethod = "";
    private $requestPath = [];

    public function __construct()
    {
        $this->httpMethod = strtoupper($_SERVER["REQUEST_METHOD"]);
        $this->requestPath = (isset($_SERVER["PATH_INFO"])) ? explode("/", $_SERVER["PATH_INFO"]) : ["/"];
    }

    public function formHomePage()
    {
        if ($this->httpMethod == "POST") {

            require_once __DIR__ . "/../modelo/ClientModel.php";

            $clientController = new ClientModel();
            if (isset($_POST["correo"])) {
                $clientController->crearNuevaSolicitud(
                    (isset($_POST["combre"])) ? $_POST["combre"] : "NULL",
                    $_POST["correo"],
                    (isset($_POST["celular"])) ? $_POST["celular"] : "NULL",
                    (isset($_POST["palabrasClave"])) ? $_POST["palabrasClave"] : "NULL",
                    (isset($_POST["diasDeSolicitud"])) ? $_POST["diasDeSolicitud"] : "NULL",
                    (isset($_POST["mensaje"])) ? $_POST["mensaje"] : "NULL"
                );
                $this->sendOutput(201, [], ["Created Successfully"], "Su solicitud ha sido creada exitosamente");
            } else {
                $this->sendOutput(403, [], ["Bad request"], "No se ha insertado un correo");
            }
        }
    }
}
