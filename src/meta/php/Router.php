<?php

class Route
{

    private $routes = [];
    private $errorRoutes = [];

    //
    public static function add($value = [])
    {
        array_push(self::$routes, $value);
    }

    //
    public static function addError($value = "")
    {
        array_push(self::$errorRoutes, $value);
    }

    //
    public static function submit()
    {
        $inputPath = (isset($_SERVER["PATH_INFO"])) ? $_SERVER["PATH_INFO"] : "/";
        foreach (self::$routes as $path => $content) {

            if ($path == $inputPath) {

                //
                include(__DIR__ . "/../../" . $content);
                exit;
            }
        }

        //
        include(__DIR__ . self::$errorRoutes["404"]);
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
