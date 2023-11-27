<?php
//dar permisos al servidor CORS
header("Access-Control-Allow-Origin: http://localhost:8080"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
include_once 'select.php';
include_once 'insert.php';
include_once 'delete.php';
include_once 'update.php';
//$OPC = $_GET["metodo"];
//echo $OPC;
switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        crud::Obtener_Estudiantes();
        break;
    case "POST":
        crudG::GuardarEstudiante();
        break;
    case "DELETE":
        $cedula = $_GET['CED_EST'];
        crudD::EliminarEstudiante($cedula);
        break;
    case "PUT":
        $registro = json_decode(file_get_contents("php://input"));
        crudU::EditarEstudiante($registro);
        break;
    }
?>