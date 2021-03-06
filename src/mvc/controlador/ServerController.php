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
            if (!isset($_SESSION["AUTH_USER"])) {

                $credentials = [];

                if (isset($_GET["login"])) {
                    $inputCredentials = explode(":", $_GET["login"]);
                    if (isset($inputCredentials[0]) && isset($inputCredentials[1])) {
                        $credentials["PHP_AUTH_USER"] = $inputCredentials[0];
                        $credentials["PHP_AUTH_PW"] = $inputCredentials[1];
                    }
                } else if (isset($_SERVER['PHP_AUTH_USER'])) {
                    $credentials["PHP_AUTH_USER"] = $_SERVER["PHP_AUTH_USER"];
                    $credentials["PHP_AUTH_PW"] = $_SERVER["PHP_AUTH_PW"];
                } else {
                    header('WWW-Authenticate: Basic realm="Inicie sesión para continuar"');
                    header('HTTP/1.0 401 Unauthorized');

                    //This excecutes if theres not a succesful login
                    $this->redirectToIndex();
                }

                if (isset($credentials["PHP_AUTH_USER"])) {
                    require_once __DIR__ . "/../modelo/ServerModel.php";

                    $serverController = new ServerModel();
                    $serverController->hola();
                    $validation = $serverController->validateUser(
                        $this->bindParams(["'", "=", "/", "\\"], $credentials["PHP_AUTH_USER"]),
                        $this->bindParams(["'", "=", "/", "\\"], $credentials["PHP_AUTH_PW"])
                    );
                    if ($validation) {
                        $_SESSION["AUTH_USER"] = $credentials["PHP_AUTH_USER"];
                        $_SESSION["AUTH_PW"] = $credentials["PHP_AUTH_PW"];

                        $this->sendOutput(202, [], ["Accepted"], "Bienvenido " . $_SESSION["AUTH_USER"]);
                    } else {
                        header('HTTP/1.0 401 Unauthorized');
                        $this->redirectToIndex();
                    }
                    $serverController->hola();
                } else {
                    echo "No se ingresaron datos";
                }
            } else {

                $this->userName = $_SESSION["AUTH_USER"];
                $this->passWord = $_SESSION["AUTH_PW"];

                if (isset($this->requestPath[1]) && $this->requestPath[1] != "") {

                    if ($this->requestPath[1] == "http") {

                        if (count($this->requestPath) >= 3 && $this->requestPath[2] != "") {
                            $this->manageHttp(array_diff($this->requestPath, [$this->requestPath[1]]));
                        } else {
                            $this->manageHttp();
                        }
                    } else {
                        $this->{$this->requestPath[1]}(array_diff($this->requestPath, [$this->requestPath[1]]));
                    }
                } else {
                    $this->sendOutput(403, [], ["Bad Request"], "Error en la solicitud: " . implode("/", $this->requestPath));
                }
            }
        } catch (Exception $e) {
            $this->sendOutput(500, [], ["Internal Server Error"], "Error interno del servidor<br>Detalles: " . $e->getMessage());
        }
    }

    public function manageHttp($http = [])
    {
        $this->sendOutput(204, $http, ["No Content"], "Funcion managHttp llamada con el parámetro: " . implode("/", $http) . "<br>Usuario: " . $this->userName);
    }

    public function agregar($mensaje = [])
    {
        $this->sendOutput(204, $mensaje, ["No Content"], "Funcion agregar llamada con el parámetro: " . implode("/", $mensaje) . "<br>Usuario: " . $this->userName);
    }

    public function close()
    {
        session_destroy();
        $this->redirectToIndex();
    }

    public function applications($http = null)
    {
        header("location: ");
        exit;
    }

    public function showVariables()
    {
        echo "<hr>";
        foreach ($_SERVER as $column => $value) {
            echo "<strong>$column</strong> => $value <br>";
        }
        echo "<hr>";
        foreach ($_GET as $column => $value) {
            echo "<strong>$column</strong> => $value <br>";
        }
        echo "<hr>";
        foreach ($_ENV as $column => $value) {
            echo "<strong>$column</strong> => $value <br>";
        }
        echo "<hr>";
        foreach ($_SESSION as $column => $value) {
            echo "<strong>$column</strong> => $value <br>";
        }
        echo "<hr>";
    }
}
