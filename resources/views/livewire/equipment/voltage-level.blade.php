<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Niveles de Tensión
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
                    <a wire:click='clear()' class="btn" data-bs-toggle="modal" data-bs-target="#voltageModal"><i class="align-middle text-success fa-solid fa-square-plus" title="Añadir nueva instalación..."></i></a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if (!$voltages->count())
            <tr>
                <td colspan="2">
                    <span class="text-muted">No hay resultados para la búsqueda</span>
                </td>
            </tr>
            @endif
            @foreach ($voltages as $voltage)
                <tr>
                    <td>{{ $voltage->id }}</td>
                    <td>{{ $voltage->name }}</td>
                    <td><a wire:click='edit({{ $voltage->id }})' data-bs-toggle="modal" data-bs-target="#voltageModal"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginator-block">
        {{ $voltages->appends(['search' => $search])->links() }}
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="voltageModal" tabindex="-1" aria-labelledby="voltageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="voltageModalLabel">Tipo de Instalación</h1>
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

