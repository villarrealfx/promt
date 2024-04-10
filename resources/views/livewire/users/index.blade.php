<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Usuarios
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
                    <a class="btn"><i class="align-middle text-success fa-solid fa-user-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Roles</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @if (!$users->count())
            <tr>
                <td colspan="7">
                    <span class="text-muted">No hay resultados para la búsqueda</span>
                </td>
            </tr>
            @endif
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->id_type }}{{ $user->identification_card }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>
                        @foreach ($user->petitioners as $petitioner)
                            {{ $petitioner->role->name }}<br>
                        @endforeach
                        @foreach ($user->supervisors as $supervisor)
                            {{ $supervisor->role->name }}<br>
                        @endforeach
                    </td>
                    <td>
                        <a wire:click="toogleStatus({{ $user->id }})">
                            @if ($user->active)
                            <i class="text-success fa-solid fa-square-check"></i>
                            @else
                            <i class="text-danger fa-solid fa-square"></i>
                            @endif
                        </a>
                    </td>
                    <td><a href="#"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginator-block">
        {{ $users->appends(['search' => $search])->links() }}
    </div>
</div>
