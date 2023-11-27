<?php
include_once "conexion.php";
class crudG
{
    public static function GuardarEstudiante()
    {
        $cedula = $_POST["CED_EST"];
        $nombre = $_POST["NOM_EST"];
        $apellido = $_POST["APE_EST"];
        $direccion = $_POST["DIR_EST"];
        $telefono = $_POST["TEL_EST"];
        $SQL_insert = "INSERT INTO estudiante (CED_EST,NOM_EST,APE_EST,DIR_EST,TEL_EST) VALUES ('$cedula','$nombre','$apellido','$direccion','$telefono')";
        $objeto = new Conexion();
        $conn = $objeto->conectar();
        $resultado = $conn->prepare($SQL_insert);
        $resultado->execute();
        $objeto = new stdClass();
        $objeto->cedula = $cedula;
        $objeto->nombre = $nombre;
        $objeto->apellido = $apellido;
        $objeto->direccion = $direccion;
        $objeto->telefono = $telefono;
        echo json_encode($objeto);

        $conn->commit();
        $conn = null;
    }
}
?>