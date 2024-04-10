<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="#">
            <span class="align-middle">PROMT - CND</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Administración
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('users') }}">
                    <i class="align-middle fa-solid fa-users" ></i> <span class="align-middle">Gestión de
                        Usuarios</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('management') }}">
                    <i class="align-middle fa-solid fa-list-check"></i> <span class="align-middle">Gestión de
                        Gerencias</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dispatches') }}">
                    <i class="align-middle fa-solid fa-city"></i> <span class="align-middle">Gestión de
                        Despachos</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('equipment') }}">
                    <i class="align-middle fa-solid fa-laptop" ></i> <span class="align-middle">Gestión de
                        Equipos</span>
                </a>
                <ul>
                    <li>
                        <a class="sidebar-link" href="{{ route('equipment.classes') }}">
                            <i class="align-middle fa-solid fa-laptop"></i> <span class="align-middle">Clase de Equipo</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="sidebar-link" href="{{ route('equipment.classes') }}">
                            <i class="align-middle fa-solid fa-laptop"></i> <span class="align-middle">Niveles de Voltaje</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('departments') }}">
                    <i class="align-middle fa-brands fa-intercom"></i> <span class="align-middle">Gestión de
                        Departamentos</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('facilities') }}">
                    <i class="align-middle fa-solid fa-house"></i> <span class="align-middle">Gestión de
                        Instalaciones</span>
                </a>
                <ul>
                    <li>
                        <a class="sidebar-link" href="{{ route('facilities.types') }}">
                            <i class="align-middle fa-solid fa-house"></i> <span class="align-middle">Tipo de
                                Instalaciones</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">
                Permisos
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('permits') }}">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Listar Permisos</span>
                </a>
            </li>
            <li class="sidebar-header">
                Eventos
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('events') }}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Listar
                        Eventos</span>
                </a>
            </li>



            <li class="sidebar-header">
                Anomalías
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Listar
                        Anomalías</span>
                </a>
            </li>


        </ul>
    </div>
</nav>
