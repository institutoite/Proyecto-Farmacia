@extends('theme.lay')

@section('Titulo')
    persmisos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/index2.js")}}" type="text/javascript"></script>
@endsection


@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @include('includes.mensaje')
                <div class="card">
                     <div class="card-header bg-info">
                        <h3 class="card-title">LISTA DE PERMISOS</h3>
                        
                    </div>
                    <nav class="navbar navbar-light ">
                        <form class="form-inline">
                            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Criterio buscar" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
                            </form>
                        <h3 class="card-title"><a class="btn btn-success" href="{{route('permiso_crear')}}">Crear Permiso</a></h3>
                    </nav>
                     <div class="card-body table-responsive no-padding">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr class="bg-info">
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>SLUG</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permisos as $permisito)
                                    <tr>
                                        <td>{{ $permisito->id}}</td>
                                        <td>{{ $permisito->nombre}}</td>
                                        <td>{{ $permisito->slug}}</td>
                                         <td>
                                                <a href="{{route('editar_permiso', ['id' => $permisito->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                <form action="{{route('eliminar_permiso', ['id' => $permisito->id])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                    </tr>  
                                @endforeach
                            </tbody>    
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>            
@endsection