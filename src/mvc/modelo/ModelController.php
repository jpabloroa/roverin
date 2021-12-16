<?php

require_once __DIR__ . "/../config/config.php";

class Database
{
    protected $connection = null;

    /**
     * Creates a connection with database when $this is called
     */
    public function __construct()
    {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

            if (mysqli_connect_errno()) {
                throw new Exception("Error de conexión con la base de datos");
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Excecutes a query that returns a ResultSet{Object}
     * 
     * @param sql $query
     */
    public function excecuteQuery($query = "")
    {
        try {
            $stmt = $this->connection->prepare($query);
            $result = $stmt->get_result();

            //
            if ($result) {
                $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
            } else {
                throw new Exception("El registro buscado no existe");
            }

            $stmt->close();
            return $arrayResult;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }

    /**
     * Excecutes a query that returns number of affected rows
     * 
     * @param sql $query
     */
    public function excecuteUpdate($query = "")
    {
        try {
            $stmt = $this->connection->prepare($query);

            if ($stmt === false) {
                throw new Exception("No es posible ejecutar la sentencia: " . $query . " Detalles del error: " . $this->connection->error);
            }

            $stmt->execute();
            $affected = $this->connection->affected_rows;
            $stmt->close();

            return $affected;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }
}
