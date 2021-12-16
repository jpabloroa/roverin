<?php

require_once __DIR__ . "/BaseController.php";

class ServerController extends BaseController
{
    private $httpMethod = "";
    private $requestPath = [];
    private $userName = "";
    private $passWord = "";

    private $isLogged = false;

    public function __construct()
    {
        $this->httpMethod = strtoupper($_SERVER["REQUEST_METHOD"]);
        $this->requestPath = (isset($_SERVER["PATH_INFO"])) ? explode("/", $_SERVER["PATH_INFO"]) : ["/", ""];

        //
        session_start();

        //
        if (!isset($_SESSION["AUTH_USER"]) || $_SESSION["AUTH_USER"] == "" || !isset($_SESSION["AUTH_PW"]) || $_SESSION["AUTH_PW"] == "") {

            if (isset($_GET["login"])) {
                $credentials = explode(":", $_GET["login"]);
                if (isset($credentials[0]) && isset($credentials[1])) {
                    $_SESSION["PHP_AUTH_USER"] = $credentials[0];
                    $_SESSION["PHP_AUTH_PW"] = $credentials[1];
                }
            }

            if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] == "") {
                header('WWW-Authenticate: Basic realm="Inicie sesión para continuar"');
                header('HTTP/1.0 401 Unauthorized');

                //This excecutes if theres not a succesful login
                //$this->redirectToIndex();
                echo "no se ha autenticado";
            } else {

                require_once __DIR__ . "/../modelo/ServerModel.php";

                $serverController = new ServerModel();
                if ($serverController->validateUser(
                    $this->bindParams(["'", "=", "/", "\\"], $_SERVER["PHP_AUTH_USER"]),
                    $this->bindParams(["'", "=", "/", "\\"], $_SERVER["PHP_AUTH_PW"])
                )) {
                    $_SESSION["AUTH_USER"] = $_SERVER["PHP_AUTH_USER"];
                    $_SESSION["AUTH_PW"] = $_SERVER["PHP_AUTH_PW"];

                    $this->sendOutput(202, [], ["Accepted"], "Bienvenido " . $this->userName);
                } else {
                    $_SESSION["AUTH_USER"] = $_SERVER["PHP_AUTH_USER"];
                    $_SESSION["AUTH_PW"] = $_SERVER["PHP_AUTH_PW"];
                    echo "usuario no valido, credenciales: " . $_SERVER["PHP_AUTH_USER"] . " y " . $_SERVER["PHP_AUTH_PW"];
                    //$this->redirectToIndex();
                    //header('HTTP/1.0 401 Unauthorized');
                    //header('Sin autorizar');
                }
            }
        } else {

            $this->userName = $_SESSION["AUTH_USER"];
            $this->passWord = $_SESSION["AUTH_PW"];

            if (isset($this->requestPath[1]) && $this->requestPath[1] != "") {

                if ($this->requestPath[1] == "http") {

                    if (isset($this->requestPath[2]) && $this->requestPath[2] != "") {
                        $this->manageHttp($this->requestPath[2]);
                    } else {
                        $this->manageHttp();
                    }
                } else {
                    if (isset($this->requestPath[2]) && $this->requestPath[2] != "") {
                        $this->{$this->requestPath[1]}($this->requestPath[2]);
                    } else {
                        $this->{($this->requestPath[1] == "") ? "defaultMethod" : $this->requestPath[1]}();
                    }
                }
            }
        }
    }

    public function manageHttp($http = null)
    {
        echo "Handler: $http";
    }

    public function agregar($mensaje = null)
    {
        echo $mensaje;
    }

    public function close()
    {
        session_destroy();
    }
}
