<div>

    <div>
        <main class="d-flex w-100">
            <div class="container d-flex flex-column">
                <div class="row">
                    <div class="mx-auto col-sm-12 col-md-11 col-lg-10 col-xl-9 d-table h-100">
                        <div class="align-middle d-table-cell">
                            <div class="mt-4 text-center">
                                <!--<img src="img/icons/icon-48x48.png" alt="Brand"-->
                                <h1 class="h2">Formulario de Anomalías</h1>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-3">

                                        <form>
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <div class="text-primary text-end fs-3 fw-bold pe-5">
                                                        Número de Anomalia: 125456
                                                    </div>
                                                </div>
                                                <hr class="border border-dark mb-4">
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Fecha de Reporte</label>
                                                    <input class="form-control form-control-lg" type="date"
                                                        name="dateAnomalie" />
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Hora de Reporte</label>
                                                    <input class="form-control form-control-lg" type="time"
                                                        name="timeAnomalie" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Fecha Acordada Corrección</label>
                                                    <input class="form-control form-control-lg" type="date" name="name"/>
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Sección de Mantenimiento</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione una Opción</option>
                                                        <option>Mantenimiento Subestaciones</option>
                                                        <option>Unidad de Protecciones</option>
                                                        <option>Unidad de Aferición</option>
                                                        <option>Unidad de Centro de Servicio</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Lugar</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione Lugar</option>
                                                        <option>Lugar 1</option>
                                                        <option>Lugar 2</option>
                                                        <option>Lugar 3</option>
                                                        <option>Lugar 4</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Clase de Equipo</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione la Clase</option>
                                                        <option>Clase 1</option>
                                                        <option>Clase 2</option>
                                                        <option>Clase 3</option>
                                                        <option>Clase 4</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Equipo</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione el Equipo</option>
                                                        <option>Equipo 1</option>
                                                        <option>Equipo 2</option>
                                                        <option>Equipo 3</option>
                                                        <option>Equipo 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Tipo de Anomalía</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione el Tipo</option>
                                                        <option>Equipo 1</option>
                                                        <option>Equipo 1</option>
                                                        <option>Equipo 1</option>
                                                        <option>Equipo 1</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Descripción</label>
                                                    <textarea class="form-control form-control-lg" rows="1"
                                                        placeholder="Ingrese la Descripción"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Fecha de Notificaciòn</label>
                                                    <input class="form-control form-control-lg" type="date"
                                                        name="dateNotifyAnomalie" />
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Hora de Notificaciòn</label>
                                                    <input class="form-control form-control-lg" type="time"
                                                        name="timeNotifyAnomalie" />
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Persona Notificada</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione Persona</option>
                                                        <option>Persona 1</option>
                                                        <option>Persona 2</option>
                                                        <option>Persona 3</option>
                                                        <option>Persona 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Permisos Asociados</label>
                                                    <textarea class="form-control form-control-lg" rows="2"
                                                        placeholder="Permisos Asociados"></textarea>
                                                </div>
                                                    <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Comentarios</label>
                                                    <textarea class="form-control form-control-lg" rows="2"
                                                    placeholder="Comentarios"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label for="formFileMultiple" class="form-label">Cargar Archivos</label>
                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                </div>
                                            </div>



                                            <div class="row mt-4">
                                                <div class="btn-group align-baseline" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-primary me-1">Actualizar</button>
                                                    <button type="button" class="btn btn-primary me-1">Cerrar</button>
                                                    <button type="button" class="btn btn-primary me-1">Notificar</button>
                                                    <button type="button" class="btn btn-primary me-1">Nuevo</button>
                                                    <button type="button" class="btn btn-primary me-1">Anular</button>
                                                    <button type="button" class="btn btn-primary me-1">Salir</button>
                                                </div>
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

    </div>


</div>
