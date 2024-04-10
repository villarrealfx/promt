<div>
    <div class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
                <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Formulario de Eventos</h1>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <div class="text-primary text-end fs-3 fw-bold pe-5">
                                                    Número de Evento: 125456
                                                </div>
                                            </div>
                                            <hr class="border border-dark mb-4">
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Motivo de Apertura</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Emergencia</option>
                                                    <option>Urgencia</option>
                                                    <option>Normal</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Causa de Falla</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Causa 1</option>
                                                    <option>Causa 1</option>
                                                    <option>Causa 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Fecha Apertura</label>
                                                <input class="form-control form-control-lg" type="date" name="dateStart"/>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Hora de Apertura</label>
                                                <input class="form-control form-control-lg" type="time"
                                                    name="timeStart" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Instalación</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Causa 1</option>
                                                    <option>Causa 1</option>
                                                    <option>Causa 1</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Clase de Equipo</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Clase 1</option>
                                                    <option>Clase 1</option>
                                                    <option>Clase 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Equipo</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Equipo 1</option>
                                                    <option>Equipo 1</option>
                                                    <option>Equipo 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-5">
                                                <label class="form-check fw-bold">Restricción de Servicio</label>
                                                <label class="form-check"><br>
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        El Evento Causó Restricciones al Servicio?
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="mb-3 col-3 mt-3">
                                                <label class="form-check"> </label>
                                                <label class="form-check fw-bold text-center text-success"> Sin Restricción de Carga</label>
                                                <input class="form-control form-control-lg visually-hidden" type="text"
                                                name="loadRestraint" placeholder="Carga en MW" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Descripción</label>
                                                    <textarea class="form-control form-control-lg" rows="2"
                                                        placeholder="Descripción"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb3 col">
                                                <label class="form-label fw-bold">Usuario Apertura</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Usuario 1</option>
                                                    <option>Usuario 2</option>
                                                    <option>Usuario 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Anomalías Asociadas</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Número de Anomalía" aria-label="Número de Anomalía" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary mt-2 ">Asociar Anomalia</button>
                                                </div>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Permisos Asociados</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Número de Anomalía" aria-label="Número de Anomalía" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                                                </div>
                                                    <div class="mb-2">
                                                        <button class="btn btn-primary mt-2">Asociar Permiso</button>
                                                    </div>
                                                <div>
                                                    <ul>
                                                        <li style="list-style-type: none;">

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Duración</label>
                                                <label class="form-label fw-bold">00:45:13.316</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Comentarios</label>
                                                    <textarea class="form-control form-control-lg" rows="2"
                                                        placeholder="Comentarios"></textarea>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Consecuencias</label>
                                                    <textarea class="form-control form-control-lg" rows="2"
                                                        placeholder="Consecuencias"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Personal Notificado</label>
                                                    <textarea class="form-control form-control-lg" rows="2"
                                                        placeholder="Comentarios"></textarea>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Nota de Cierre</label>
                                                    <textarea class="form-control form-control-lg" rows="2"
                                                        placeholder="Consecuencias"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Documentos</label>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="border border-dark mb-4">
                                        <div class="row mt-4">
                                            <div class="btn-group align-baseline" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-primary">Actualizar</button>
                                                <button type="button" class="btn btn-primary">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Notificar</button>
                                                <button type="button" class="btn btn-primary">Nuevo</button>
                                                <button type="button" class="btn btn-primary">Anular</button>
                                                <button type="button" class="btn btn-primary">Salir</button>
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
    </div>
</div>
