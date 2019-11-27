@extends('theme.lay')
@section('titulo')
    Cliente
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
                            <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_cliente')}}">Crear Cliente</a></h3>
                        </div>
                        <div class="card-body">
                        <nav class="navbar navbar-light">
                            <a class="navbar-brand">Busqueda de Clientes</a>
                            <form class="form-inline">
                                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Criterio buscar" aria-label="Search">
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
                                        <th>carnet</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($Personas as $clientes)
                                        <tr>
                                            @if($clientes['cliente']['persona_id']>0)
                                                <td>{{$clientes['nombre']}}</td>
                                                <td>{{$clientes['apellidop']}}</td>
                                                <td>{{$clientes['apellidom']}}</td>
                                                <td>{{$clientes['fechanacimiento']}}</td>
                                                <td>{{$clientes['genero']}}</td>
                                                <td>{{$clientes['celular']}}</td>
                                                <td>{{$clientes['cliente']['carnet']}}</td>
                                                   <td>
                                                <a href="{{route('editar_cliente', ['id' =>$clientes['cliente']['id']])}}" class="btn-accion-tabla tooltipsC" title="Editar este usuario">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                <form action="{{route('eliminar_cliente', ['id' => $clientes['cliente']['id']])}}" class="d-inline form-eliminar" method="POST">
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


  