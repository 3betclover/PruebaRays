function obtener_usuarios() {
    $.post("ajax/controlador/obtener_usuarios.php", function (result) {
        $("#tbody_usuarios").html(result);
    });
}

function obtener_usuario(id_usuario) {
    $.getJSON("ajax/controlador/obtener_usuario.php", { id_usuario: id_usuario }, function (result) {
        if (result.length > 0) {
            let usuario = result[0]; 
            $("#editar_id").val(id_usuario); 
            $("#editar_nombre").val(usuario.nombre);
            $("#editar_rut").val(usuario.rut_chileno);
            $("#editar_correo").val(usuario.correo);
            $("#editar_fecha").val(usuario.fecha_nacimiento);
            $("#editar_empleo").val(usuario.empleo);
            $("#editar_estado").val(usuario.estado);
        } else {
            console.error("No se encontraron datos para el usuario con ID " + id_usuario);
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud AJAX: " + textStatus, errorThrown);
    });
}

function agregar_usuario() {
    let nombre = $("#agregar_nombre").val().trim();
    let rut_chileno = $("#agregar_rut").val().trim();
    let correo = $("#agregar_correo").val().trim();
    let fecha_nacimiento = $("#agregar_fecha").val().trim();
    let empleo = $("#agregar_empleo").val().trim();
    let estado = $("#agregar_estado").val();

    let errorMessages = [];
    if (nombre === '') errorMessages.push('El nombre es obligatorio.');
    if (rut_chileno === '') errorMessages.push('El RUT es obligatorio.');
    if (correo === '') errorMessages.push('El correo es obligatorio.');
    if (fecha_nacimiento === '') errorMessages.push('La fecha de nacimiento es obligatoria.');
    if (empleo === '') errorMessages.push('El empleo es obligatorio.');
    if (estado === 'Seleccione un estado') errorMessages.push('El estado es obligatorio.');

    if (errorMessages.length > 0) {
        alert(errorMessages.join('\n'));
        return;
    }

    $.post("ajax/controlador/agregar_usuario.php", {
        nombre: nombre,
        rut_chileno: rut_chileno,
        correo: correo,
        fecha_nacimiento: fecha_nacimiento,
        empleo: empleo,
        estado: estado
    }, function (result) {
        if (result === "éxito") {
            obtener_usuarios();
            $("#modal_agregar_usuario").modal("hide");
        } else {
            console.log("Error: " + result);
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud AJAX: " + textStatus, errorThrown);
    });
}

function editar_usuario() {
    let id_usuario = $("#editar_id").val();
    let nombre = $("#editar_nombre").val().trim();
    let rut_chileno = $("#editar_rut").val().trim();
    let correo = $("#editar_correo").val().trim();
    let fecha_nacimiento = $("#editar_fecha").val().trim();
    let empleo = $("#editar_empleo").val().trim();
    let estado = $("#editar_estado").val();

    let errorMessages = [];
    if (nombre === '') errorMessages.push('El nombre es obligatorio.');
    if (rut_chileno === '') errorMessages.push('El RUT es obligatorio.');
    if (correo === '') errorMessages.push('El correo es obligatorio.');
    if (fecha_nacimiento === '') errorMessages.push('La fecha de nacimiento es obligatoria.');
    if (empleo === '') errorMessages.push('El empleo es obligatorio.');
    if (estado === 'Seleccione un estado') errorMessages.push('El estado es obligatorio.');

    if (errorMessages.length > 0) {
        alert(errorMessages.join('\n'));
        return;
    }

    $.post("ajax/controlador/editar_usuario.php", {
        id_usuario: id_usuario,
        nombre: nombre,
        rut_chileno: rut_chileno,
        correo: correo,
        fecha_nacimiento: fecha_nacimiento,
        empleo: empleo,
        estado: estado
    }, function (result) {
        if (result.result === "éxito") {
            obtener_usuarios();
            $("#modal_editar_usuario").modal("hide");
        } else {
            console.log("Error: " + result.result);
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud AJAX: " + textStatus, errorThrown);
    });
}

function eliminar_usuario() {
    let id_usuario = localStorage.getItem("id_usuario");
    $.post("ajax/controlador/eliminar_usuario.php", { id_usuario: id_usuario }, function (result) {
        if (result == "éxito") {
            obtener_usuarios();
            $("#modal_eliminar_usuario").modal("hide");
        } else {
            console.log("Error :" + result);
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud AJAX: " + textStatus, errorThrown);
    });
}

function setear_modal_eliminar(id_usuario) {
    localStorage.setItem("id_usuario", id_usuario);
}