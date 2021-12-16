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
        try {
            $this->httpMethod = strtoupper($_SERVER["REQUEST_METHOD"]);
            $this->requestPath = (isset($_SERVER["PATH_INFO"])) ? explode("/", str_replace("/&access", "/", $_SERVER["PATH_INFO"])) : ["/", ""];;

            //
            session_start();

            //
            if (!isset($_SESSION["AUTH_USER"]) || $_SESSION["AUTH_USER"] == "" || !isset($_SESSION["AUTH_PW"]) || $_SESSION["AUTH_PW"] == "") {

                $credentials = [];

                if (isset($_GET["login"])) {
                    $inputCredentials = explode(":", $_GET["login"]);
                    foreach ($inputCredentials as $num => $val) {
                        echo "Valor $num: $val<br>";
                    }
                    if (isset($inputCredentials[0]) && isset($inputCredentials[1])) {
                        $credentials["PHP_AUTH_USER"] = $credentials[0];
                        $credentials["PHP_AUTH_PW"] = $credentials[1];
                    }
                } else if (!isset($_SERVER['PHP_AUTH_USER'])) {
                    header('WWW-Authenticate: Basic realm="Inicie sesión para continuar"');
                    //header('HTTP/1.0 401 Unauthorized');

                    //This excecutes if theres not a succesful login
                    //$this->redirectToIndex();

                } else {
                    $credentials["PHP_AUTH_USER"] = $_SERVER["PHP_AUTH_USER"];
                    $credentials["PHP_AUTH_PW"] = $_SERVER["PHP_AUTH_PW"];
                }

                /*
                require_once __DIR__ . "/../modelo/ServerModel.php";

                $serverController = new ServerModel();
                if ($serverController->validateUser(
                    $this->bindParams(["'", "=", "/", "\\"], $credentials["PHP_AUTH_USER"]),
                    $this->bindParams(["'", "=", "/", "\\"], $credentials["PHP_AUTH_PW"])
                )) {
                    $_SESSION["AUTH_USER"] = $credentials["PHP_AUTH_USER"];
                    $_SESSION["AUTH_PW"] = $credentials["PHP_AUTH_PW"];

                    $this->sendOutput(202, [], ["Accepted"], "Bienvenido " . $_SESSION["AUTH_USER"]);
                } else {
                    echo "usuario no valido, credenciales: " . $credentials["PHP_AUTH_USER"] . " y " . $credentials["PHP_AUTH_PW"];
                    //$this->redirectToIndex();
                    header('HTTP/1.0 401 Unauthorized');
                    //header('Sin autorizar');
                }*/

                echo "<hr>Credenciales: " . $credentials["PHP_AUTH_USER"] . " y " . $credentials["PHP_AUTH_PW"] . "<hr>";
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
        } catch (Exception $e) {
            $this->sendOutput(500, [], ["Internal Server Error"], "Error interno del servidor<br>Detalles: " . $e->getMessage());
        }
    }

    public function manageHttp($http = null)
    {
        echo "Handler: $http";
        $this->sendOutput(204, [], ["No Content"], "Funcion managHttp llamada con el parámetro: " . $http . "<br>Usuario: " . $this->userName);
    }

    public function agregar($mensaje = null)
    {
        echo $mensaje;
        $this->sendOutput(204, [], ["No Content"], "Funcion agregar llamada con el parámetro: " . $mensaje . "<br>Usuario: " . $this->userName);
    }

    public function close()
    {
        session_destroy();
        $this->sendOutput(204, [], ["No Content"], "Funcion close llamada<br>Usuario: " . $this->userName);
    }

    public function showVariables()
    {
        foreach ($_SERVER as $column => $value) {
            echo "<strong>$column</strong> => $value <br>";
        }
        echo "<hr>";
    }
}
