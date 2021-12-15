<?php

class ClientModel extends DataBase
{
    public function obtenerSolicitudCreada($fechaDeCreacion = null, $codigoConteo = null, $correo = null, $celular = null, $nombre = null)
    {
        $sql = "";
        if (isset($correo) && $correo != "") {

            $sql = "WHERE correo = $correo";

            if (isset($fechaDeCreacion) && $fechaDeCreacion != "") {
                $sql .= " AND fechaDeCreacion = $fechaDeCreacion";
            }

            if (isset($codigoConteo) && $codigoConteo != "") {
                $sql .= " AND codigoConteo = $codigoConteo";
            }

            if (isset($celular) && $celular != "") {
                $sql .= " AND celular = $celular";
            }

            if (isset($nombre) && $nombre != "") {
                $sql .= " AND nombre = $nombre";
            }

            return $this->excecuteQuery("SELECT * FROM trabajos $sql ORDER BY fechaDeCreacion ASC LIMIT 1");
        } else {
            throw new Exception("No se ha ingresado parámetro de búsqueda");
        }
    }
    public function crearNuevaSolicitud($nombre, $correo, $celular, $palabrasClave, $diasDeSolicitud, $mensaje)
    {
        return $this->excecuteUpdate("INSERT INTO trabajos (
            fechaDeCreacion,
            nombre, 
            correo,
            celular, 
            palabras, 
            estado, 
            diasDeSolicitud, 
            mensaje
        ) VALUES (
            NOW(),
            $nombre,
            $correo,
            $celular,
            $palabrasClave,
            0,
            $diasDeSolicitud,
            $mensaje
        )
        ");
    }
}
