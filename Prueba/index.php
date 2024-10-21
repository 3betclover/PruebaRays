<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test - RAYS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h5 class="text-start align-content-center">Usuarios</h5>
                    <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_agregar_usuario">
                        Agregar Usuario
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-sm table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Rut</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Fecha Nacimiento</th>
                            <th scope="col">Empleo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_usuarios">
                        <tr>
                            <td class="text-center align-middle" colspan="8">No hay usuarios disponibles</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Agregar Usuario -->
    <div class="modal fade" id="modal_agregar_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="agregar_nombre" class="form-label">Nombre</label>
                            <input id="agregar_nombre" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div>
                                    <label for="agregar_rut" class="form-label">Rut</label>
                                    <input id="agregar_rut" type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label for="agregar_correo" class="form-label">Correo</label>
                                    <input id="agregar_correo" type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="agregar_empleo" class="form-label">Empleo</label>
                            <input id="agregar_empleo" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div>
                                    <label for="agregar_fecha" class="form-label">Fecha Nacimiento</label>
                                    <input id="agregar_fecha" type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="agregar_estado" class="form-label">Estado</label>
                                <select id="agregar_estado" class="form-select" aria-label="estado">
                                    <option selected>Seleccione un estado</option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="agregar_usuario();">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Usuario -->
    <div class="modal fade" id="modal_editar_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" id="editar_id">
                        <div class="mb-3">
                            <label for="editar_nombre" class="form-label">Nombre</label>
                            <input id="editar_nombre" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div>
                                    <label for="editar_rut" class="form-label">Rut</label>
                                    <input id="editar_rut" type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label for="editar_correo" class="form-label">Correo</label>
                                    <input id="editar_correo" type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editar_empleo" class="form-label">Empleo</label>
                            <input id="editar_empleo" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div>
                                    <label for="editar_fecha" class="form-label">Fecha Nacimiento</label>
                                    <input id="editar_fecha" type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="editar_estado" class="form-label">Estado</label>
                                <select id="editar_estado" class="form-select" aria-label="estado">
                                    <option selected>Seleccione un estado</option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="editar_usuario();">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Eliminar Usuario -->
    <div class="modal fade" id="modal_eliminar_usuario" tabindex="-1" aria-labelledby="modalEliminarUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEliminarUsuarioLabel">Eliminar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Está seguro de que desea eliminar este usuario?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" onclick="eliminar_usuario()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="ajax/js/usuarios.js"></script>
    <script>
        $(document).ready(function() {
            obtener_usuarios();
        });
    </script>
</body>
</html>