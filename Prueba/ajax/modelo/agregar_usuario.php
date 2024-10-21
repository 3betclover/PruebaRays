<?php 
// *********************************************************************************************************
//                                    !LIBRERIAS
// *********************************************************************************************************
include("meekrodb.2.3.class.php");
include("conexion.php");
DB::$error_handler = false; // since we're catching errors, don't need error handler
DB::$throw_exception_on_error = true;
// *********************************************************************************************************
//                                    !CÓDIGO
// *********************************************************************************************************

function agregar_usuario($nombre, $rut_chileno, $correo, $fecha_nacimiento, $empleo, $estado) {
    try {
        // Consulta SQL para insertar un nuevo usuario
        $consulta = "INSERT INTO usuarios (nombre, rut_chileno, correo, fecha_nacimiento, empleo, estado) VALUES (%s, %s, %s, %s, %s, %s)";
        
        DB::query($consulta, $nombre, $rut_chileno, $correo, $fecha_nacimiento, $empleo, $estado);
        
        return "éxito";
    } catch (MeekroDBException $e) {
        return "Error: " . $e->getMessage() . "<br>\n" . "SQL Query: " . $e->getQuery() . "<br>\n";
    }
}
?>