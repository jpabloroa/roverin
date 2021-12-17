<?php

class BaseController
{
    /**
     * Send API output.
     *
     * @param int $status
     * @param array  $data
     * @param array $httpHeader
     * @param string $info
     */
    protected function sendOutput($status = 0, $datos = [], $httpHeaders = [], $info = '')
    {

        //
        if ($status < 200) {
            $respuesta = 'HTTP\2.0 ' . $status . ' La solicitud ha sido recibida, permanece en proceso';
        } else if ($status >= 200 && $status < 300) {
            $respuesta = 'HTTP\2.0 ' . $status . ' La solicitud ha sido procesada exitosamente';
        } else if ($status >= 300 && $status < 400) {
            $respuesta = 'HTTP\2.0 ' . $status . ' La solicitud se redireccionará';
        } else if ($status >= 400 && $status < 500) {
            $respuesta = 'HTTP\2.0 ' . $status . ' La solicitud presenta un error';
        } else if ($status >= 500) {
            $respuesta = 'HTTP\2.0 ' . $status . ' La solicitud no pudo ser procesada con éxito, error del servidor';
        }

        //
        array_push($httpHeaders, $respuesta, 'Content-Type: application/json');

        //
        if (is_array($httpHeaders) && count($httpHeaders)) {
            foreach ($httpHeaders as $httpHeader) {
                header($httpHeader);
            }
        }

        //
        $objecto = (object)['respuesta' => $respuesta, 'estado' => $status, 'datos' => $datos, 'info' => $info];

        //
        echo json_encode($objecto);
        exit;
    }

    /**
     * Redirect user to Index page
     */
    protected function redirectToIndex()
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $link = "https";
        } else {
            $link = "http";
        }

        // Here append the common URL characters.
        $link .= "://";

        // Append the host(domain name, ip) to the URL.
        $link .= $_SERVER['HTTP_HOST'];

        // Append the requested resource location to the URL 
        $scrpt = $_SERVER['SCRIPT_NAME'];
        $link .= substr($scrpt, "0", strlen($scrpt) - 21);
        //echo "Redireccionando a $link";

        //
        echo '<script>window.location.replace("' . $link . '");</script>';
        exit;
    }

    /**
     * Checks if there are not alloed characters in a text and it changes
     */
    protected function bindParams($characters = [], $text = "")
    {
        echo "llamada a funcion BaseController::bindParams($text)<br>";
        $array = $characters;
        $string = $text;

        $num = 0;

        foreach ($array as $char) {
            echo "metodo foreach instanciado $num veces";
            $num++;
            if (str_contains($string, $char)) {
                $string = str_replace($char, " ", $string);
            }
        }
        echo "salida a funcion BaseController::bindParams($text)->$string<br>";
        return $string;
    }
}
