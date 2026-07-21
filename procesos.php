<?php
require_once "cn.php";
$nombre =$_POST["nombre"];
$edad = $_POST["edad"];
$Fecha_nacimiento = $_POST["fecha_nacimiento"];
$residencia = $_POST["residencia"];
$telefono = $_POST["telefono"];
$telefono_encargado1 = $_POST["telefono_encargado1"];
$telefono_encargado2 = $_POST["telefono_encargado2"];

$sql ="insert into estudiantes(nombre, edad, fecha_nacimiento, residencia, telefono, telefono_encargado1, telefono_encargado2) values ('$nombre', $edad, '$Fecha_nacimiento', '$residencia', $telefono, $telefono_encargado1, $telefono_encargado2)"; 
mysqli_query($cn,$sql); 
echo ("se registro");

?>