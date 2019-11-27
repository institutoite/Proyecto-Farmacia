<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-info">
    <!-- Left navbar links -->
        <ul class="navbar-nav bg-info">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.html" class="nav-link text-white">Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link text-white">Contactos</a>
        </li>
        </ul>


        
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-white" data-widget="control-sidebar" data-slide="true" href="#">
              <span class="hidden-xs">Hola, {{session()->get('nombre_usuario')}}</span>
              <a class="text-white" href="{{route('logout')}}">Cerrar Sesion</a>
              <a href="{{route('login')}}">Iniciar Sesion</a>
            </a>
          </li>
        </ul>


















     
  </nav>