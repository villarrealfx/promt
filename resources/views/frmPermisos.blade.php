<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>PROMT - Register</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="mx-auto col-sm-12 col-md-11 col-lg-10 col-xl-9 d-table h-100">
                    <div class="align-middle d-table-cell">
                        <div class="mt-4 text-center">
                            <img src="img/icons/icon-48x48.png" alt="Brand">
                            <h1 class="h2">Registro de Permisos</h1>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label">Número de Permiso</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    name="personalNumber" placeholder="Ingrese N° de Permiso" />
                                            </div>

                                            <div class="mb-3 col">
                                                <label class="form-label">Número de Anomalia</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    name="personalNumber" placeholder="Ingrese N° de Anomalia" />
                                            </div>

                                            <div class="mb-3 col">
                                                <label class="form-label">Estado</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Solicitado</option>
                                                    <option>Pre-Aprobado 2</option>
                                                    <option>Aprobado</option>
                                                    <option>Suspendido</option>
                                                </select>
                                            </div>

                                        </div>




                                        <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label">Fecha de Solicitud</label>
                                                    <input class="form-control form-control-lg" type="date" name="name" />
                                                </div>

                                                <div class="mb-3 col">
                                                    <label class="form-label">Hora de Solicitud</label>
                                                    <input class="form-control form-control-lg" type="time"
                                                        name="timeAnomalie" />
                                                </div>

                                                <div class="mb-3 col">
                                                    <label class="form-label">Fecha Solicitada</label>
                                                    <input class="form-control form-control-lg" type="date" name="name" />
                                                </div>

                                                <div class="mb-3 col">
                                                    <label class="form-label">Hora Solicitada</label>
                                                    <input class="form-control form-control-lg" type="time"
                                                        name="timeAnomalie" />
                                                </div>

                                        </div>

                                        <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label">Departamento</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione una Opción</option>
                                                        <option>Mantenimiento Subestaciones</option>
                                                        <option>Unidad de Protecciones</option>
                                                        <option>Unidad de Aferición</option>
                                                        <option>Unidad de Centrode Servicio</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col">
                                                    <label class="form-label">Sección de Mantenimiento</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione una Opción</option>
                                                        <option>Mantenimiento Subestaciones</option>
                                                        <option>Unidad de Protecciones</option>
                                                        <option>Unidad de Aferición</option>
                                                        <option>Unidad de Centrode Servicio</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col">
                                                    <label class="form-label">Solicitante</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione una Opción</option>
                                                        <option>Mantenimiento Subestaciones</option>
                                                        <option>Unidad de Protecciones</option>
                                                        <option>Unidad de Aferición</option>
                                                        <option>Unidad de Centrode Servicio</option>
                                                    </select>
                                                </div>
                                        </div>


                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label for="validationCustom02" class="form-label">Equipo</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="?" required>
                                                <div class="valid-feedback">
                                                  Looks good!
                                                </div>
                                            </div>

                                            <div class="mb-3 col">
                                                <label for="validationCustom02" class="form-label">Lugar</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="?" required>
                                                <div class="valid-feedback">
                                                  Looks good!
                                                </div>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Lugar Referencia</label>
                                                <textarea class="form-control form-control-lg" rows="2"
                                                    placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row>">
                                        <div class="mb-3 col">
                                            <div class="mb-3 col">
                                                <label class="form-label">Trabajo a Efectuar</label>
                                                <textarea class="form-control form-control-lg" rows="2"
                                                    placeholder="Permisos"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">


                                        <div class="mb-3 col">
                                            <label class="form-label">Motivo de la Solic</label>
                                            <select class="mb-3 form-select">
                                                <option selected>Seleccione una Opción</option>
                                                <option>Mantenimiento Subestaciones</option>
                                                <option>Unidad de Protecciones</option>
                                                <option>Unidad de Aferición</option>
                                                <option>Unidad de Centrode Servicio</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col">
                                            <label class="form-label">Fecha Aprobada</label>
                                            <input class="form-control form-control-lg" type="date" name="name" />
                                        </div>

                                        <div class="mb-3 col">
                                            <label class="form-label">Hora Aprobada</label>
                                            <input class="form-control form-control-lg" type="time"
                                                name="timeAnomalie" />
                                        </div>

                                    </div>





                                    <div class="row">

                                        <div class="mb-3 col">
                                            <label for="validationCustom02" class="form-label">Duracion</label>
                                            <input type="text" class="form-control" id="validationCustom02" value="?" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>





                                        <div class="mb-3 col">
                                            <label for="validationCustom02" class="form-label">Disponibilidad de Emergencia</label>
                                            <input type="text" class="form-control" id="validationCustom02" value="?" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3 col">
                                            <label for="validationCustom02" class="form-label">Permiso Otorgado Por</label>
                                            <input type="text" class="form-control" id="validationCustom02" value="?" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>


                                    </div>

                                        <div class="row">
                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Tarjeta de Consignacion
                                                </label>
                                                </div>
                                            </div>

                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Colocacion de Puesta a Tierra
                                                </label>
                                                </div>
                                            </div>

                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Delimitacion del Area de Trabajo
                                                </label>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Verificar Ausencia de Tension
                                                </label>
                                                </div>
                                            </div>

                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Bloqueo de Mando del Disyuntor
                                                </label>
                                                </div>
                                            </div>

                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Bloqueo de Seccionadores
                                                </label>
                                                </div>
                                          </div>
                                        </div>


                                    <div class="row">

                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Cortocircuitar Transfo de Corriente
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Colocacion de Puesta a Tierra
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Delimitacion del Area de Trabajo
                                                </label>
                                                </div>
                                            </div>
                                    </div>


                                    <div classs="row">
                                        <div class="col-md-12">
                                            <label for="exampleFormControlTextarea1" class="form-label">11. Otro</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                        </div>


                                    </div>



                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label class="form-label">Permisos Asociados</label>
                                            <textarea class="form-control form-control-lg" rows="2"
                                                placeholder="Permisos"></textarea>
                                        </div>
                                        <div class="mb-3 col">
                                            <label class="form-label">Comentarios</label>
                                            <textarea class="form-control form-control-lg" rows="2"
                                                placeholder="Comentarios"></textarea>
                                        </div>
                                    </div>

                                    <div class="row"></div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label">Documentos</label>
                                                <input class="form-control form-control-lg" type="text" name="text"
                                                    placeholder="Cambiar porsubir documentosOJO" />
                                            </div>
                                        </div>
                                    </div>


                                        <div class="gap-2 mt-3 d-grid">
                                            <a href="index.html" class="btn btn-lg btn-primary">Registrar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>

</body>

</html>
