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

function editar_usuario($id_usuario, $nombre, $rut_chileno, $correo, $fecha_nacimiento, $empleo, $estado) {
    try {
        // Consulta SQL para actualizar un usuario
        $consulta = "UPDATE usuarios SET nombre=%s, rut_chileno=%s, correo=%s, fecha_nacimiento=%s, empleo=%s, estado=%s WHERE id=%i";
        
        DB::query($consulta, $nombre, $rut_chileno, $correo, $fecha_nacimiento, $empleo, $estado, $id_usuario);
        
        return "éxito";
    } catch (MeekroDBException $e) {
        return "Error: " . $e->getMessage() . "<br>\n" . "SQL Query: " . $e->getQuery() . "<br>\n";
    }
}
?>