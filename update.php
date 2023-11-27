<?php
//dar permisos al servidor CORS
header("Access-Control-Allow-Origin: http://localhost:8080"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
include_once "conexion.php";
class crudU
{
    public static function EditarEstudiante($registro)
    {
        $nombre = $registro->NOM_EST;
        $apellido = $registro->APE_EST;
        $direccion = $registro->DIR_EST;
        $telefono = $registro->TEL_EST;
        $objeto = new Conexion();
        $conn = $objeto->conectar();
        $SQL_UPDATE = "UPDATE estudiante SET NOM_EST = '$nombre', APE_EST = '$apellido',DIR_EST = '$direccion' ,TEL_EST = '$telefono' WHERE CED_EST = '$registro->CED_EST'";
        $resultado = $conn->prepare($SQL_UPDATE);
        if($resultado->execute()){
            echo "actualizado\n".json_encode($resultado); 
        }
        //echo json_encode($resultado);
        $conn->commit();
        $conn = null;
    }
}
?>