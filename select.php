<?php
include_once "conexion.php";
//dar permisos al servidor CORS
header("Access-Control-Allow-Origin: http://localhost:8080"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
class crud{

    public static function Obtener_Estudiantes(){
        $SQL_select = "SELECT * FROM estudiante";
        $objeto = new Conexion();
        $conn = $objeto->conectar();
        $resultado = $conn->prepare($SQL_select);
        $resultado->execute();
        $dato = $resultado->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($dato);
    }
}
?>