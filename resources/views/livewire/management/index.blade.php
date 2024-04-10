<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Gerencias
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
                    <a wire:click='clear()' class="btn" data-bs-toggle="modal" data-bs-target="#manageModal"><i class="align-middle text-success fa-solid fa-square-plus" title="Añadir nueva instalación..."></i></a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nivel Superior</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if (!$management->count())
            <tr>
                <td colspan="2">
                    <span class="text-muted">No hay resultados para la búsqueda</span>
                </td>
            </tr>
            @endif
            @foreach ($management as $manage)
                <tr>
                    <td>{{ $manage->id }}</td>
                    <td>{{ $manage->name }}</td>
                    <td>
                        @if ($manage->id != $manage->parent->id)
                            {{ $manage->parent->name }}
                        @endif
                    </td>
                    <td><a wire:click='edit({{ $manage->id }})' data-bs-toggle="modal" data-bs-target="#manageModal"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginator-block">
        {{ $management->appends(['search' => $search])->links() }}
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="manageModal" tabindex="-1" aria-labelledby="manageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="manageModalLabel">Gerencia</h1>
                    <button wire:click='clear()' type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input
                            type="text"
                            wire:model="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Introduzca el nombre de la Gerencia">
                    </div>
                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Nivel Superior</label>
                        <select wire:model='parent_id' name="parent_id" class="form-select">
                            @foreach ($parents as $parent)
                                <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                            @endforeach
                        </select>
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

