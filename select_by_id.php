<?php
include_once("conexion.php");

    $bd = new Conexion();
    $bd = $bd->conectar();

    $id = $_GET["CED_EST"];
    $array = array();
    $resultado = $bd->query("SELECT * FROM estudiante WHERE CED_EST = '$id'");

    while ($row = $resultado->fetch()) {
        $e = array();
        $e["CED_EST"] = $row[0];
        $e["NOM_EST"] = $row[1];
        $e["APE_EST"] = $row[2];
        $e["DIR_EST"] = $row[3];
        $e["TEL_EST"] = $row[4];
        array_push($array, $e);
    }
    echo json_encode($array);
