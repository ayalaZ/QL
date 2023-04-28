<?php
// Datos de conexión
$host = "localhost";
$user = "root";
$password = "";
$database = "QL";
$mysqli = new mysqli($host, $user, $password, $database);

class acciones{
    public $datos;
    function insert($table,$columnas,$datos){
        global $mysqli;
        $this->datos = $mysqli->query("INSERT INTO $table($columnas) VALUES($datos)");
        return $this->datos;
    }
}
?>