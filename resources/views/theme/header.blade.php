<!-- Navbar -->
  
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-info">
    <!-- Left navbar links -->
     
        <ul class="navbar-nav bg-info">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('inicio')}}" class="nav-link text-white">Inicio</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-white" data-widget="control-sidebar" data-slide="true" href="#">
              <span class="hidden-xs">{{session()->get('nombre_usuario')}}</span>
              <a class="text-white" href="{{route('logout')}}">{{(session()->get('nombre_usuario'))!== null ? 'Cerrar Session' : ''}}</a>
              <a class="text-white" href="{{route('login')}}">{{ (session()->get('nombre_usuario'))!== null ? '' : 'Iniciar Sesion' }}</a>
            </a>
          </li>
        </ul>
       
  </nav>
  
  