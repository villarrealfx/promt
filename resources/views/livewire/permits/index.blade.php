<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Equipos
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
                    <a href="{{ route('permits.create') }}" class="btn"><i class="align-middle text-success fa-solid fa-square-plus" title="Añadir nuevo Equipo"></i></a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Lugar</th>
                <th>Equipo</th>
                <th>Departamento</th>
                <th>Solicitado</th>
                <th>Programado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if (!$permits->count())
            <tr>
                <td colspan="8">
                    <span class="text-muted">No hay resultados para la búsqueda</span>
                </td>
            </tr>
            @endif
            @foreach ($permits as $permit)
                <tr>
                    <td>{{ $permit->id }}</td>
                    <td>{{ $permit->description }}</td>
                    <td>{{ $permit->facility->name }}</td>
                    <td>{{ $permit->equipment->description }}</td>
                    <td>{{ $permit->department->name }}</td>
                    <td>{{ $permit->requested_for }}</td>
                    <td>{{ $permit->approved_for }}</td>
                    <td><a href="{{ route('permits.edit', ['id' => $permit->id]) }}" data-bs-toggle="modal" data-bs-target="#facilityModal"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginator-block">
        {{ $permits->appends(['search' => $search])->links() }}
    </div>
</div>


