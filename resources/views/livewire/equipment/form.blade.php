<div>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
                <div class="mx-auto col-sm-12 col-md-11 col-lg-10 col-xl-9 d-table h-100">
                    <div class="align-middle d-table-cell">
                        <div class="mt-4 text-center">
                            <h1 class="h2">Registro de Equipos</h1>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col-8">
                                                <label class="form-label fw-bold">Lugar</label>
                                                <select wire:model='facility_id' class="mb-3 form-select">
                                                    @foreach ($facilities as $facility)
                                                        <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col ">
                                                <label class="form-label fw-bold">Codigo</label>
                                                <input wire:model='code' class="form-control form-control-lg" type="text" name="text"
                                                    placeholder="Ingrese Codigo" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Clase de Equipo</label>
                                                <select wire:model='class_id' class="mb-3 form-select">
                                                    @foreach ($classes as $class)
                                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Nivel de tensión</label>
                                                <select wire:model='voltage_level_id' class="mb-3 form-select">
                                                    @foreach ($voltages as $voltage)
                                                        <option value="{{ $voltage->id }}">{{ $voltage->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Descripcion</label>
                                                <input wire:model='description' class="form-control form-control-lg" type="textarea" name="text"
                                                    placeholder="Introduzca la Descripcion" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-4">
                                                <label class="form-label fw-bold">Fecha de Entrada Comercial</label>
                                                <input wire:model='in_service_date' class="form-control form-control-lg" type="date"
                                                    name="dateAnomalie" />
                                            </div>
                                            {{--<div class="mb-3 col">
                                                <label class="form-label fw-bold">Hora de Entrada Comercial</label>
                                                <input class="form-control form-control-lg" type="time"
                                                    name="timeAnomalie" />
                                            </div>--}}
                                        </div>
                                        <!--
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Advertencia Especial de Operaciones</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    -->
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <div class="mb-3 col">
                                                    <label class="form-label">Texto Advertencia Especial de Operaciones</label>
                                                    <textarea wire:model='opertations_warning' class="form-control form-control-lg" rows="2"
                                                        placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label fw-bold">Advertencia Especial de Mantenimiento</label>
                                                <select class="mb-3 form-select">
                                                    <option selected>Seleccione una Opción</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    -->
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <div class="mb-3 col">
                                                    <label class="form-label">Texto Advertencia Especial de Mantenimiento</label>
                                                    <textarea wire:model='maintenance_warning' class="form-control form-control-lg" rows="2"
                                                        placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row fw-bold d-flex">
                                            <div class="mb-3 col">
                                                <label class="form-label">Pertenece a:</label>
                                            </div>
                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                <input wire:model='belongs_to' class="form-check-input" type="radio" value="corpoelec" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Corpoelec
                                                </label>
                                                </div>
                                            </div>
                                            <div class="mb-3 col">
                                                <div class="form-check">
                                                    <input wire:model='belongs_to' class="form-check-input" type="radio" value="external" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Red Externa
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <div class="mb-3 col">
                                                    <label class="form-label">Comentarios</label>
                                                    <textarea wire:model='comments' class="form-control form-control-lg" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @if ($has_brand)
                                                <div class="mb-3 col-6">
                                                    <div class="mb-3 col ">
                                                        <label class="form-label fw-bold">Modelo</label>
                                                        <input wire:model='brand' class="form-control form-control-lg" type="text"
                                                            placeholder="Ingrese Codigo" />
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($has_serial)
                                                <div class="mb-3 col-6">
                                                    <div class="mb-3 col ">
                                                        <label class="form-label fw-bold">Serial</label>
                                                        <input wire:model='serial' class="form-control form-control-lg" type="text"
                                                            placeholder="Ingrese Codigo" />
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            @if ($has_lenght)
                                                <div class="mb-3 col-4">
                                                    <div class="mb-3 col ">
                                                        <label class="form-label fw-bold">Longitud (Km)</label>
                                                        <input wire:model='brand' class="form-control form-control-lg" type="text"
                                                            placeholder="Ingrese Codigo" />
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($has_towers)
                                                <div class="mb-3 col-4">
                                                    <div class="mb-3 col ">
                                                        <label class="form-label fw-bold">Número de Torres</label>
                                                        <input wire:model='serial' class="form-control form-control-lg" type="text"
                                                            placeholder="Ingrese Codigo" />
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($has_vain)
                                                <div class="mb-3 col-4">
                                                    <div class="mb-3 col ">
                                                        <label class="form-label fw-bold">Vano Promedio</label>
                                                        <input wire:model='serial' class="form-control form-control-lg" type="text"
                                                            placeholder="Ingrese Codigo" />
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="gap-2 mt-3 d-grid">
                                            <a wire:click='save()' class="btn btn-lg btn-primary">
                                                @if (isset($equip_id))
                                                    Actualizar
                                                @else
                                                    Registrar
                                                @endif
                                            </a>
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

