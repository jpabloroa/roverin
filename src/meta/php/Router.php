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
        $inputPath = (isset($_SERVER["PATH_INFO"])) ? $_SERVER["PATH_INFO"] : "/";
        foreach (self::$routes as $path => $content) {

            //
            if ($path == $inputPath) {

                //
                include(__DIR__ . "/../.." . $content);
                exit;
            } else if (strlen($inputPath) > 4) {
                $text = substr($inputPath, 0, 4);
                if ($text == "/src") {
                    $_REQUEST["error"] = "gonocaustico";
                    include(__DIR__ . "/../../" . self::$errorRoutes["404"]);
                    exit;
                }
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
