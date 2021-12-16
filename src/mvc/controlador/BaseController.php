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
     * Checks if there are not alloed characters in a text and it changes
     */
    public function bindParams($characters = [], $text = "")
    {
        $array = $characters;
        $string = $text;
        foreach ($array as $char) {
            if (str_contains($string, $char)) {
                $string = str_replace($char, " ", $string);
            }
        }
        return $string;
    }
}
