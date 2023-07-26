<?php 
$servidor="localhost";
$usuario="root";
$pass="";

$conexion=mysqli_connect($servidor,$usuario,$pass);
if(mysqli_errno($conexion)){
    echo "error de conexion";
    exit();
}