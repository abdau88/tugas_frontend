<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Frontend Laravel</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('mahasiswa.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dosen.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>Dosen</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
