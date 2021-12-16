<?php

class Route
{

    private static $routes = [];
    private static $errorRoutes = [];

    //
    public static function add($route = "", $value = "")
    {
        self::$routes[$route] = $value;
    }

    //
    public static function addError($route = "", $value = "")
    {
        self::$errorRoutes[$route] = $value;
    }

    //
    public static function submit()
    {
        $inputPath = (isset($_SERVER["PATH_INFO"])) ? explode("/", $_SERVER["PATH_INFO"]) : ["/"];
        foreach (self::$routes as $path => $content) {

            //
            if ($path == "/" . $inputPath[1]) {

                //
                if (isset($inputPath[2])) {
                    $_SERVER["PATH_INFO"] = "";
                    for ($g = 2; $g < count($inputPath); $g++) {
                        $_SERVER["PATH_INFO"] .= "/" . $inputPath[$g];
                    }
                }

                //
                include(__DIR__ . "/../.." . $content);
                exit;
            }
        }

        //
        $_REQUEST["error"] = "404";
        include(__DIR__ . "/../../" . self::$errorRoutes["404"]);
        exit;
    }

    //
    public static function getRoutes()
    {
        return self::$routes;
    }

    //
    public function getErrorRoutes()
    {
        return self::$errorRoutes;
    }
}
