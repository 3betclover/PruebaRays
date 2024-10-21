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

function obtener_usuario($id_usuario) {
    try {
        // Consulta SQL para obtener los datos de un usuario
        $consulta = "SELECT * FROM usuarios WHERE id = %i";
        
        $result = DB::query($consulta, $id_usuario);
        
        return $result;
    } catch (MeekroDBException $e) {
        return "Error: " . $e->getMessage() . "<br>\n" . "SQL Query: " . $e->getQuery() . "<br>\n";
    }
}
?>