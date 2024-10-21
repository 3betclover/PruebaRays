<?php
// *********************************************************************************************************
//                                    !LIBRERIAS
// *********************************************************************************************************
include("../modelo/obtener_usuarios.php");
// *********************************************************************************************************
//                                    !CÓDIGO
// *********************************************************************************************************

$results = obtener_usuarios();

if (is_array($results)) {
    foreach($results as $usuario) {
        echo "<tr>";
        echo "<td>{$usuario['usuarios.id']}</td>";
        echo "<td>{$usuario['usuarios.nombre']}</td>";
        echo "<td>{$usuario['usuarios.rut_chileno']}</td>";
        echo "<td>{$usuario['usuarios.correo']}</td>";
        echo "<td>{$usuario['usuarios.fecha_nacimiento']}</td>";
        echo "<td>{$usuario['usuarios.empleo']}</td>";
        echo "<td>{$usuario['usuarios.estado']}</td>";
        echo "<td>
                <button class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#modal_editar_usuario' onclick='obtener_usuario({$usuario['usuarios.id']})'>Editar</button>
                <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modal_eliminar_usuario' onclick='setear_modal_eliminar({$usuario['usuarios.id']})'>Eliminar</button>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>Error: {$results}</td></tr>";
}
?>