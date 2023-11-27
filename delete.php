<?php
class crudD
{
    public static function EliminarEstudiante($cedula)
    {
        include_once "conexion.php";
        //$cedula = $_POST["cedula"];
        $SQL_DELETE = "DELETE FROM estudiante WHERE CED_EST = '$cedula'";
        $objeto = new Conexion();
        $conn = $objeto->conectar();
        $resultado = $conn->prepare($SQL_DELETE);
        $resultado->execute();
        echo json_encode($resultado);
        $conn->commit();
        $conn = null;
    }
}
?>