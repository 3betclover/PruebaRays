<?php
// *********************************************************************************************************
//                                    !LIBRERIAS
// *********************************************************************************************************
include("../modelo/editar_usuario.php");
// *********************************************************************************************************
//                                    !CÓDIGO
// *********************************************************************************************************

$id_usuario = $_POST["id_usuario"];
$nombre = $_POST["nombre"];
$rut_chileno = $_POST["rut_chileno"];
$correo = $_POST["correo"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$empleo = $_POST["empleo"];
$estado = $_POST["estado"];

$result = editar_usuario($id_usuario, $nombre, $rut_chileno, $correo, $fecha_nacimiento, $empleo, $estado);
header('Content-type: application/json');
echo json_encode(["result" => $result]);
?>