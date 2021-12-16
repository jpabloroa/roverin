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
        try {
            if ($this->httpMethod == "POST") {

                require_once __DIR__ . "/../modelo/ClientModel.php";

                $clientController = new ClientModel();

                if (isset($_POST["correo"])) {
                    $solicitud = $clientController->crearNuevaSolicitud(
                        (isset($_POST["combre"])) ? $this->bindParams(["'", "=", "/", "\\"], $_POST["combre"]) : "NULL",
                        $this->bindParams(["'", "=", "/", "\\"], $_POST["correo"]),
                        (isset($_POST["celular"])) ? $this->bindParams(["'", "=", "/", "\\"], $_POST["celular"]) : "NULL",
                        (isset($_POST["palabrasClave"])) ? $this->bindParams(["'", "=", "/", "\\"], $_POST["palabrasClave"]) : "NULL",
                        (isset($_POST["diasDeSolicitud"])) ? $this->bindParams(["'", "=", "/", "\\"], $_POST["diasDeSolicitud"]) : "NULL",
                        (isset($_POST["mensaje"])) ? $this->bindParams(["'", "=", "/", "\\"], $_POST["mensaje"]) : "NULL"
                    );
                    //setcookie("last-request", json_encode($solicitud), time() + (150), "/", "", true);
                    $this->sendOutput(201, $solicitud, ["Set-Cookie: last-request=" . json_encode($solicitud) . "; Expires=Wed, 21 Oct 2015 07:28:00 GMT, Path=/", "Created Successfully"], " Su solicitud ha sido creada exitosamente<br>Número de solicitud: " . $solicitud[0]["codigoConteo"] . "<br>Fecha de creación: " . $solicitud[0]["fechaDeCreacion"]);
                } else {
                    $this->sendOutput(403, [], ["Bad request"], "No se ha insertado un correo");
                }
            }
        } catch (Exception $e) {
            $this->sendOutput(500, [], ["Internal Server Error"], "Error del servidor\n Detalles: " . $e->getMessage());
        }
    }
}
