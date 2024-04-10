
<div>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
                <div class="mx-auto col-sm-12 col-md-11 col-lg-10 col-xl-9 d-table h-100">
                    <div class="align-middle d-table-cell">
                        <div class="my-4 text-center">
                            <!--<img src="img/icons/icon-48x48.png" alt="Brand">-->
                            <h1 class="h2">Formulario de Permisos</h1>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <div class="text-primary text-end fs-3 fw-bold pe-5">
                                                    @if ($permit_id)
                                                        Número de Permiso: {{ $permit_id }}
                                                    @endif
                                                </div>
                                            </div>
                                            <hr class="mb-4 border border-dark">
                                        </div>
                                        <div class="row">
                                            {{--<div class="mb-3 col">
                                                <label class="form-label fw-bold">Fecha y Hora de Solicitud</label>
                                                <input  class="form-control form-control-lg" type="datetime-local" name="name" />
                                            </div>--}}
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Fecha y Hora Solicitada</label>
                                                <input wire:model='requested_for'class="form-control form-control-lg" type="datetime-local" name="name" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Departamento</label>
                                                <select wire:model='department_id' class="mb-3 form-select">
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Solicitante</label>
                                                <select wire:model='petitioner_id' class="mb-3 form-select">
                                                    @if ($department_id)
                                                        @foreach ($department_data->petitioners as $petitioner)
                                                            <option value="{{ $petitioner->user_id }}">{{ $petitioner->user->last_name . ", " . $petitioner->user->name }}</option>
                                                        @endforeach
                                                    @else
                                                        <option value="0">Seleccione una opción</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Instalación</label>
                                                <select wire:model='facility_id' class="mb-3 form-select">
                                                    @if ($department_id)
                                                        @foreach ($department_data->facilities as $facility)
                                                            <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                                                        @endforeach
                                                    @else
                                                        <option value="0">Seleccione una opción</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Clase de Equipo</label>
                                                <select wire:model='equipment_class_id' class="mb-3 form-select">
                                                        @foreach ($equipment_classes as $class)
                                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Equipo</label>
                                                <select wire:model='equipment_id' class="mb-3 form-select">
                                                    @if ($equipment_id && $equipment != null)
                                                        @foreach ($equipment as $equip)
                                                            <option value="{{ $equip->id }}">{{ $equip->name }}</option>
                                                        @endforeach
                                                    @else
                                                        <option value="0">Seleccione una opción</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Lugar Referencia</label>
                                                <textarea class="form-control form-control-lg" rows="2"
                                                    placeholder="Ingrese Lugar de referencia"></textarea>
                                            </div>
                                        </div>
                                        <div class="row>">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Trabajos a Efectuar</label>
                                                    <textarea wire:model="work_to_do" class="form-control form-control-lg" rows="2"
                                                        placeholder="Ingrese Trabajos a Efectuar"></textarea>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Motivo de la Solicitud</label>
                                                <select wire:model='reason' class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option value="preventive">Preventivo</option>
                                                    <option value="corrective">Correctivo</option>
                                                    <option value="tests">Pruebas</option>
                                                    <option value="others">Otros</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Fecha y Hora Programada</label>
                                                <input wire:model='approved_for' class="form-control form-control-lg" type="datetime-local" name="name" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label for="validationCustom02" class="form-label fw-bold">Fecha y Hora Est. Culminacion</label>
                                                <input wire:model='ends_on' type="datetime-local" class="form-control" id="validationCustom02" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="mb-3 col">
                                                <label for="validationCustom02" class="form-label fw-bold">Disponibilidad de Emergencia</label>
                                                <input wire:model='emergency_availability' type="time" class="form-control" id="validationCustom02" placeholder="Tiempo de Disponibilidad"required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="mb-3 col">
                                                <label for="validationCustom02" class="form-label fw-bold">Permiso Otorgado Por</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Despachador 1</option>
                                                    <option>Despachador 1</option>
                                                    <option>Despachador 1</option>
                                                    <option>Despachador 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Comentarios</label>
                                                <textarea class="form-control form-control-lg" rows="2"
                                                    placeholder="Comentarios"></textarea>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Documentos</label>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                    -->
                                        <div class="mt-2 text-center row">
                                            <h3>Medidas de Seguridad</h3>
                                        </div>
                                        <hr class="mb-4 border border-dark">


                                        <div class="row">
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($cautions as $caution)
                                                <div class="mb-3 col-md-4">
                                                    <div class="form-check">
                                                        <input wire:model='checked_cautions' class="form-check-input" type="checkbox" value="{{ $caution->id }}" id="flexCheckDefault_{{$i}}">
                                                        <label class="form-check-label fw-bold" for="flexCheckDefault_{{$i}}">
                                                            {{ $caution->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                                @php
                                                    $i++;
                                                @endphp
                                            @endforeach
                                        </div>

                                        {{--Opening Starting--}}
                                        @if (Route::currentRouteName() == 'permits.open')
                                            <div class="mt-2 text-center row">
                                                <h3>Apertura de Permiso</h3>
                                            </div>
                                            <hr class="mb-4 border border-dark">
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Fecha y Hora de Apertura</label>
                                                    <input class="form-control form-control-lg" type="datetime-local" name="name" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Responsable del Trabajo</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione una Opción</option>
                                                        <option>Trabajador 1</option>
                                                        <option>Trabajador 2</option>
                                                        <option>Trabajador 3</option>
                                                        <option>Trabajador 4</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Despachador de Guardia</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione una Opción</option>
                                                        <option>Despachador 1</option>
                                                        <option>Despachador 2</option>
                                                        <option>Despachador 3</option>
                                                        <option>Despachador 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div classs="row">
                                                <div class="mb-3 col">
                                                    <label class="form-labe fw-bold">Nota de Inicio</label>
                                                    <textarea class="form-control form-control-lg" rows="3"
                                                        placeholder="Comentarios"></textarea>
                                                </div>
                                            </div>
                                        @endif
                                        {{--Opening Ending--}}
                                        {{--Closing Starting--}}
                                        @if (Route::currentRouteName() == 'permits.close')
                                            <div class="mt-2 text-center row">
                                                <h3>Cierre de Permiso</h3>
                                            </div>
                                            <hr class="mb-4 border border-dark">
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Fecha de Cierre</label>
                                                    <input class="form-control form-control-lg" type="datetime-local" name="name" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Responsable del Trabajo</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione una Opción</option>
                                                        <option>Trabajador 1</option>
                                                        <option>Trabajador 2</option>
                                                        <option>Trabajador 3</option>
                                                        <option>Trabajador 4</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col">
                                                    <label class="form-label fw-bold">Despachador de Guardia</label>
                                                    <select class="mb-3 form-select">
                                                        <option selected>Seleccione una Opción</option>
                                                        <option>Despachador 1</option>
                                                        <option>Despachador 2</option>
                                                        <option>Despachador 3</option>
                                                        <option>Despachador 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div classs="row">
                                                <div class="mb-3 col">
                                                    <label class="form-labe fw-bold">Nota de Cierre</label>
                                                    <textarea class="form-control form-control-lg" rows="3"
                                                        placeholder="Comentarios"></textarea>
                                                </div>
                                            </div>
                                            <hr class="mb-4 border border-dark">
                                            <div class="mt-4 row">
                                                <div class="align-baseline btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-primary me-1">Actualizar</button>
                                                    <button type="button" class="btn btn-primary me-1">Cerrar</button>
                                                    <button type="button" class="btn btn-primary me-1">Notificar</button>
                                                    <button type="button" class="btn btn-primary me-1">Nuevo</button>
                                                    <button type="button" class="btn btn-primary me-1">Anular</button>
                                                    <button type="button" class="btn btn-primary me-1">Salir</button>
                                                </div>
                                            </div>
                                        @endif
                                        {{--Closing Ending--}}
                                        <hr class="mb-4 border border-dark">
                                        <div class="mt-4 row">
                                            <div class="align-baseline btn-group" role="group" aria-label="Basic example">
                                                <button wire:click='save()' class="btn btn-primary btn-block">Crear</button>
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
