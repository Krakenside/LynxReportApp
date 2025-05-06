<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">Back Office </span>
    </a>
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrateur </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tableau de bord </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Clients.index')}}" class="nav-link">
                        {{-- <i class="fa-solid fa-users"></i> --}}
                        <i class="fas fa-users"></i>
                        <p>
                            Clients
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Sites.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Sites
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('intervention.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        {{-- <i class="nav-icon fas fa-th"></i> --}}

                        <p>
                            Interventions
                            {{-- <i class="nav-icon fas fa-tree"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('signalement.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        {{-- <i class="nav-icon fas fa-th"></i> --}}

                        <p>
                            Signalements
                            {{-- <i class="nav-icon fas fa-tree"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Techniciens.index')}}" class="nav-link">
                        <i class="ion ion-person-add"></i>
                        {{-- <i class="nav-icon fas fa-th"></i> --}}

                        <p>
                            Techniciens
                            {{-- <i class="nav-icon fas fa-tree"></i> --}}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
