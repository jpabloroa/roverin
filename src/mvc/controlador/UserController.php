<?php

require_once __DIR__."/BaseController.php";

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

            require_once __DIR__ . "../modelo/ClientModel.php";

            $clientController = new ClientModel();
            $data = parse_str($_SERVER['QUERY_STRING'], $query);
            if (isset($data["correo"])) {
                $clientController->crearNuevaSolicitud(
                    (isset($data["combre"])) ? $data["combre"] : "NULL",
                    $data["correo"],
                    (isset($data["celular"])) ? $data["celular"] : "NULL",
                    (isset($data["palabrasClave"])) ? $data["palabrasClave"] : "NULL",
                    (isset($data["diasDeSolicitud"])) ? $data["diasDeSolicitud"] : "NULL",
                    (isset($data["mensaje"])) ? $data["mensaje"] : "NULL"
                );
                $this->sendOutput(201, [], ["Created Successfully"], "Su solicitud ha sido creada exitosamente");
            } else {
                $this->sendOutput(403, [], ["Bad request"], "No se ha insertado un correo");
            }
        }
    }
}
