<?php 
// conexionphp();
// function conexionphp(){
// $_SERVER='localhost';
// $user='root';
// $pass='kimetsu';
// $db='serviciosrd';
// $puert='3306';
// $conexion=new mysqli($_SERVER, $user, $pass, $db, $puert) or die ("Error en la conexion");
// return $conexion;
// $conexion->ser_charset("uft8");
// date_default_timezone_set("America/domincanrepublic");
// }


$conexion = new mysqli("localhost", "root", "kimetsu", "serviciosrd");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>