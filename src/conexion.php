<?php
namespace Clases;

use PDO;
use PDOException;

Class Conexion {

    private $host;
    private $db;
    private $user;
    private $pass;
    private $dsn;
    protected $conexion;

    function __construct () {
        $this->host = "localhost";
        $this->db = "tarea6";
        $this->user = "gestor";
        $this->pass = "secreto";
        $this->dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
        $this->createConnection();
    }

    function createConnection() {
        try {
            $this->conexion = new PDO($this->dsn, $this->user, $this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión 1 creada <br>";
        } catch (PDOException $ex) {
            die("Error en la conexión: mensaje: " . $ex->getMessage());
        }
        return $this->conexion;
    }
}