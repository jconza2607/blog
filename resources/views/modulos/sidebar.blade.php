<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/')}}" class="brand-link">
      <img src="{{ url('/') }}/vistas/img/icono.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Juanito Travel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/') }}/vistas/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrador</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <!-- Botón Blog -->
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Blog</p>
                </a>
            </li>

            <!-- Administradores -->
            <li class="nav-item">
                <a href="{{ url('/') }}/administradores" class="nav-link">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>Administradores</p>
                </a>
            </li>

            <!-- Botón Categorías -->
            <li class="nav-item">
                <a href="{{ url('/') }}/categorias" class="nav-link">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Categorías</p>
                </a>
            </li>

            <!-- Botón Blog -->
            <li class="nav-item">
                <a href="{{ url('/') }}/articulos" class="nav-link">
                    <i class="nav-icon fas fa-sticky-note"></i>
                    <p>Artículos</p>
                </a>
            </li>

            <!-- Botón Opiniones -->
            <li class="nav-item">
                <a href="{{ url('/') }}/opiniones" class="nav-link">
                    <i class="nav-icon fas fa-user-check"></i>
                    <p>Opiniones</p>
                </a>
            </li>

            <!-- Botón Banner -->
            <li class="nav-item">
                <a href="{{ url('/') }}/banner" class="nav-link">
                    <i class="nav-icon fas fa-images"></i>
                    <p>Banner</p>
                </a>
            </li>

            <!-- Botón Anuncios -->
            <li class="nav-item">
                <a href="{{ url('/') }}/anuncios" class="nav-link">
                    <i class="nav-icon fas fa-bullhorn"></i>
                    <p>Anuncios</p>
                </a>
            </li>

            <!-- Boton Sitio Web -->
            <li class="nav-item">
                <a href="{{ substr(url('/'),0,-11) }}" class="nav-link">
                    <i class="nav-icon fas fa-globe"></i>
                    <p>Ver Sitio</p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
