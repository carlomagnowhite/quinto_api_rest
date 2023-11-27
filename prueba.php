<?php
//Array asociativo
$arrayaso = array("nombre"=>"Marlon","apellido"=>"Masabanda","edad"=>20);
//echo $arrayaso["nombre"];//echo solo para cadenas de texto
print_r($arrayaso);
echo "<br>";

//JSON ENCODE
$array_JSON = json_encode($arrayaso);
echo $array_JSON;
echo "<br>";
var_dump($array_JSON);
echo "<br>";
echo $arrayaso["nombre"];
echo "<br>";

//Array normal a JSON
$array = ["lunes","martes","miercoles"];
print_r($array);
echo "<br>";
$array_normal_Json = json_encode($array);
echo $array_normal_Json;
echo "<br>";

//Objeto de PHP a JSON
$objeto = new stdClass();
$objeto->nombre = "Marlon";
$objeto->apellido = "Masabanda";
$objeto->edad = 22;
$PHP_OBJETO_JSON = json_encode($objeto);
echo $PHP_OBJETO_JSON;
echo "<br>";

$persona='{
    "nombre":"marlon",
    "apellido":"masabanda",
    "edad":222
}';
//JSON DECODE pasa de JSON a PHP
$JSON_PHP = json_decode($persona);
print_r($JSON_PHP);

//JSON a ARRAY
$JSON_PHP = json_decode($persona,true);
print_r($JSON_PHP);

//Deber: Investigar como pasar de JSON String a los distintos formatos de datos y vicerversa en PHP y JS
?>