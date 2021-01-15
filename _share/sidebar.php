<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
        <img src="..\dist\img\Galeria-iCONS\astroboss.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">La Cochera</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="..\dist\img\Galeria-iCONS\astroboss.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block" id="nombre-perfil">Usuario</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item <?= $actual === 'dashboard' ? 'menu-open' : '' ?>">
                    <a href="\content\dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboards</p>
                    </a>
                </li>
                <li class="nav-item <?= $actual === 'ventas' ? 'menu-open' : '' ?>">
                    <a href="\content\ventas.php" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Ventas</p>
                    </a>
                </li>
                <li class="nav-item <?= $actual === 'vehiculos' ? 'menu-open' : '' ?>">
                    <a href="\content\vehiculos.php" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>Vehículos</p>
                    </a>
                </li>
                <li class="nav-item <?= $actual === 'empleados' ? 'menu-open' : '' ?>">
                    <a href="\content\empleados.php" class="nav-link">
                        <i class="nav-icon fas fa-user-astronaut"></i>
                        <p>Empleados</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>