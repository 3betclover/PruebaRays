<?php
// *********************************************************************************************************
//                                    !LIBRERIAS
// *********************************************************************************************************
include("../modelo/agregar_usuario.php");
// *********************************************************************************************************
//                                    !CÓDIGO
// *********************************************************************************************************

$nombre = $_POST["nombre"];
$rut_chileno = $_POST["rut_chileno"];
$correo = $_POST["correo"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$empleo = $_POST["empleo"];
$estado = $_POST["estado"];

echo agregar_usuario($nombre, $rut_chileno, $correo, $fecha_nacimiento, $empleo, $estado);
?>