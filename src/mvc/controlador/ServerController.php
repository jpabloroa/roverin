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
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');

            //This excecutes if theres not a succesful login
            $this->redirectToIndex();
        } else {
            if (!$this->isLogged) {

                $this->userName = $_SERVER["PHP_AUTH_USER"];
                $this->passWord = $_SERVER["PHP_AUTH_PW"];

                require_once __DIR__ . "/../modelo/ServerModel.php";

                $serverController = new ServerModel();
                if ($serverController->validateUser(
                    $this->bindParams(["'", "=", "/", "\\"], $this->userName),
                    $this->bindParams(["'", "=", "/", "\\"], $this->passWord)
                )) {
                    $this->isLogged = true;
                    $this->sendOutput(202, [], ["Accepted"], "Bienvenido " . $this->userName);
                } else {
                    $this->redirectToIndex();
                }
            } else {
                if (isset($this->requestPath[1]) && $this->requestPath[1] != "") {

                    if ($this->requestPath[1] == "http") {

                        if (isset($this->requestPath[2]) && $this->requestPath[2] != "") {
                            $this->manageHttp($this->requestPath[2]);
                        } else {
                            $this->manageHttp();
                        }
                    } else {
                    }
                }
            }
        }
    }

    public function manageHttp($http = null)
    {
        echo "Handler: $http";
    }
}
