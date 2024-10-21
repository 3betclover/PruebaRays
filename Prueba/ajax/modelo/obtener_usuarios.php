<?php 
// *********************************************************************************************************
//									!LIBRERIAS
// *********************************************************************************************************
    include("meekrodb.2.3.class.php");
    include("conexion.php");
    DB::$error_handler = false; // since we're catching errors, don't need error handler
    DB::$throw_exception_on_error = true;
// *********************************************************************************************************
//									!CÓDIGO
// *********************************************************************************************************

    function obtener_usuarios()
    {
        try
        {
            // Consulta SQL para obtener todos los usuarios
            $consulta = "SELECT id, nombre, rut_chileno, correo, fecha_nacimiento, empleo, estado FROM usuarios";
            $results = DB::queryFullColumns($consulta);
            return $results;
        }
        catch(MeekroDBException $e) {
            return "Error: " . $e->getMessage() . "<br>\n"."SQL Query: " . $e->getQuery() . "<br>\n";
        }
    }
?>