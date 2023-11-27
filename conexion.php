<?php
class Conexion
{
    public function conectar()
    {
        define("host", 'localhost');
        define("user", 'root');
        define("psw", '');
        define("database", 'quinto');
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND > 'SET NAMES utf8'); //habilita la BD para usar utf8
        try {
            return new PDO("mysql:host=" . host . ";dbname=" . database, user, psw, $opc);
        } catch (PDOException $e) {
            die("Error en la conexion" . $e->getMessage());
        }
    }

}

?>