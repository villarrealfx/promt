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
                            <h1 class="h2">Registro de Anomalías</h1>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label">Número de Anomalía</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    name="personalNumber" placeholder="Ingrese N° de Anomalia"/>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Fecha de Reporte</label>
                                                <input class="form-control form-control-lg" type="date"
                                                    name="dateAnomalie" />
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Hora de Reporte</label>
                                                <input class="form-control form-control-lg" type="time"
                                                    name="timeAnomalie" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label">Fecha Acordada Corrección</label>
                                                <input class="form-control form-control-lg" type="date" name="name"/>
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
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label">Lugar</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Lugar 1</option>
                                                    <option>Lugar 2</option>
                                                    <option>Lugar 3</option>
                                                    <option>Lugar 4</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Clase de Equipo</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Clase 1</option>
                                                    <option>Clase 2</option>
                                                    <option>Clase 3</option>
                                                    <option>Clase 4</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Equipo</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Equipo 1</option>
                                                    <option>Equipo 2</option>
                                                    <option>Equipo 3</option>
                                                    <option>Equipo 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label">Tipo de Anomalía</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Equipo 1</option>
                                                    <option>Equipo 1</option>
                                                    <option>Equipo 1</option>
                                                    <option>Equipo 1</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Descripción</label>
                                                <textarea class="form-control form-control-lg" rows="1"
                                                    placeholder="Descripción"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label">Fecha de Notificaciòn</label>
                                                <input class="form-control form-control-lg" type="date"
                                                    name="dateNotifyAnomalie" />
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Hora de Notificaciòn</label>
                                                <input class="form-control form-control-lg" type="time"
                                                    name="timeNotifyAnomalie" />
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Persona Notificada</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Equipo 1</option>
                                                    <option>Equipo 2</option>
                                                    <option>Equipo 3</option>
                                                    <option>Equipo 4</option>
                                                </select>
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
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label">Documentos</label>
                                                    <input class="form-control form-control-lg" type="text" name="text"
                                                        placeholder="Cambiar porsubir documentosOJO" />
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
