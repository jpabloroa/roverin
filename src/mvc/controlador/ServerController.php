<?php

require_once __DIR__ . "/BaseController.php";

class ServerController extends BaseController
{
    private $httpMethod = "";
    private $requestPath = [];

    public function __construct()
    {
        $this->httpMethod = strtoupper($_SERVER["REQUEST_METHOD"]);
        $this->requestPath = (isset($_SERVER["PATH_INFO"])) ? explode("/", $_SERVER["PATH_INFO"]) : ["/"];
    }

    public function serverAuthentication($u,$r)
    {
        try {
            foreach($_SERVER as $column => $value){
                echo "<strong>$column</strong> => $value <br>";
            }
        } catch (Exception $e) {
            $this->sendOutput(500, [], ["Internal Server Error"], "Error del servidor\n Detalles: " . $e->getMessage());
        }
    }
}