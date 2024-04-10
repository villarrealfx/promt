<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Clases de Equipos
        </div>
        <div class="card-body">
            <div class="d-flex">
                <div class="col-2">
                    <select wire:model='perPage' class="form-select">
                        <option value="5">5 por página</option>
                        <option value="10">10 por página</option>
                        <option value="15">15 por página</option>
                        <option value="25">25 por página</option>
                        <option value="50">50 por página</option>
                        <option value="100">100 por página</option>
                    </select>
                </div>
                <div class="col-10 d-flex">
                    <input type="text" class="form-control" placeholder="Buscar" wire:model="search">
                    <a wire:click='cleanSearch()' class="btn"><i class="align-middle text-danger fa-solid fa-delete-left"></i></a>
                    <a wire:click='clear()' class="btn" data-bs-toggle="modal" data-bs-target="#classModal"><i class="align-middle text-success fa-solid fa-square-plus" title="Añadir nueva clase de equipo"></i></a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>¿Tiene Marca?</th>
                <th>¿Tiene Serial?</th>
                <th>¿Tiene Longitud?</th>
                <th>¿Tiene Torres?</th>
                <th>¿Tiene Vanos?</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if (!$classes->count())
            <tr>
                <td colspan="8">
                    <span class="text-muted">No hay resultados para la búsqueda</span>
                </td>
            </tr>
            @endif
            @foreach ($classes as $class)
                <tr>
                    <td>{{ $class->id }}</td>
                    <td>{{ $class->name }}</td>
                    <td>
                        <a wire:click="toogleBrand({{ $class->id }})">
                            @if ($class->has_brand)
                            <i class="text-success fa-solid fa-square-check"></i>
                            @else
                            <i class="text-danger fa-solid fa-square"></i>
                            @endif
                        </a>
                    </td>
                    <td>
                        <a wire:click="toogleSerial({{ $class->id }})">
                            @if ($class->has_serial)
                            <i class="text-success fa-solid fa-square-check"></i>
                            @else
                            <i class="text-danger fa-solid fa-square"></i>
                            @endif
                        </a>
                    </td>
                    <td>
                        <a wire:click="toogleLenght({{ $class->id }})">
                            @if ($class->has_lenght)
                            <i class="text-success fa-solid fa-square-check"></i>
                            @else
                            <i class="text-danger fa-solid fa-square"></i>
                            @endif
                        </a>
                    </td>
                    <td>
                        <a wire:click="toogleTowers({{ $class->id }})">
                            @if ($class->has_towers)
                            <i class="text-success fa-solid fa-square-check"></i>
                            @else
                            <i class="text-danger fa-solid fa-square"></i>
                            @endif
                        </a>
                    </td>
                    <td>
                        <a wire:click="toogleVain({{ $class->id }})">
                            @if ($class->has_vain)
                            <i class="text-success fa-solid fa-square-check"></i>
                            @else
                            <i class="text-danger fa-solid fa-square"></i>
                            @endif
                        </a>
                    </td>
                    <td><a wire:click='edit({{ $class->id }})' data-bs-toggle="modal" data-bs-target="#classModal"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginator-block">
        {{ $classes->appends(['search' => $search])->links() }}
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="classModal" tabindex="-1" aria-labelledby="classModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="classModalLabel">Tipo de Instalación</h1>
                    <button wire:click='clear()' type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input
                            type="text"
                            wire:model="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Introduzca el nombre del tipo de instalación">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">¿Tiene Marca?</div>
                            <div class="col">¿Tiene Serial?</div>
                            <div class="col">¿Tiene Longitud?</div>
                            <div class="col">¿Tiene Torres?</div>
                            <div class="col">¿Tiene Vanos?</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" wire:model='has_brand' class="form-check">
                            </div>
                            <div class="col">
                                <input type="checkbox" wire:model='has_serial' class="form-check">
                            </div>
                            <div class="col">
                                <input type="checkbox" wire:model='has_lenght' class="form-check">
                            </div>
                            <div class="col">
                                <input type="checkbox" wire:model='has_towers' class="form-check">
                            </div>
                            <div class="col">
                                <input type="checkbox" wire:model='has_vain' class="form-check">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" wire:click="save()">
                        @if ($item_id)
                            Actualizar
                        @else
                            Crear
                        @endif
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

