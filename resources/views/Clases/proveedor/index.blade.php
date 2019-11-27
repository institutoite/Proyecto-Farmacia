@extends('theme.lay')
@section('titulo')
    Proveedor
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu-rol/index.js")}}" type="text/javascript"></script>
@endsection


@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
             @include('includes.mensaje')
            <div class="card">
                      
                <div class="card-body table-responsive no-padding">
                              <!-- Horizontal Form -->
                     
                    
                        <div class="card-header">
                            <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_proveedor')}}">Crear Proveedor</a></h3>
                        </div>
                        <div class="card-body">
                       <nav class="navbar navbar-light">
                            <a class="navbar-brand">Busqueda de proveedor</a>
                            <form class="form-inline">
                                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Criterio de busqueda" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
                            </form>
                        </nav>
                                                
                            @csrf   
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr>
                                     
                                        <th>Nombre</th>
                                        <th>ApellidoP</th>
                                        <th>ApellidoM</th>
                                        <th>FechaNac</th>
                                        <th>Genero</th>
                                        <th>Celular</th>
                                        <th>Rubro</th>
                                        <th>Nacionalidad</th>
                                        <th>Razon S</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($Personas as $proveedor)
                                        <tr>
                                            @if($proveedor['proveedor']['persona_id']>0)
                                                <td>{{$proveedor['nombre']}}</td>
                                                <td>{{$proveedor['apellidop']}}</td>
                                                <td>{{$proveedor['apellidom']}}</td>
                                                <td>{{$proveedor['fechanacimiento']}}</td>
                                                <td>{{$proveedor['genero']}}</td>
                                                <td>{{$proveedor['celular']}}</td>
                                                <td>{{$proveedor['proveedor']['rubro']}}</td>
                                                <td>{{$proveedor['proveedor']['nacionalidad']}}</td>
                                                <td>{{$proveedor['proveedor']['razonsocial']}}</td>
                                                    
                                                <td>
                                                <a href="{{route('editar_proveedor', ['id' =>$proveedor['proveedor']['id']])}}" class="btn-accion-tabla tooltipsC" title="Editar este usuario">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                <form action="{{route('eliminar_proveedor', ['id' => $proveedor['proveedor']['id']])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este Persona">
                                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    
           
                </div>      
                  
            </div>
        </div>
    </div>
</div>            


@endsection


  