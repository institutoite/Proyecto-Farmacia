@extends('theme.lay')
@section('titulo')
    Usuarios
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
                           <h3 class="">LISTA DE USUARIOS</h3> 
                              <nav class="navbar navbar-light ">
                                    <form class="form-inline">
                                        <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Criterio buscar" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
                                    </form>
                                        <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_usuario')}}">Crear Usuario</a></h3>
                                </nav> 
                        </div>
                        <div class="card-body">
                            
                            @csrf   
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr class="bg-info">
                                        <th>Nº</th>
                                        <th>NOMBRE</th>
                                        <th>USUARIO</th>
                                        <th class="width70">OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $key=>$item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item['nombre']}}</td>
                                            <td>{{$item['usuario']}}</td>
                                            <td>
                                                <a href="{{route('editar_usuario', ['id' => $item['id']])}}" class="btn-accion-tabla tooltipsC" title="Editar este usuario">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                <form action="{{route('eliminar_usuario', ['id' => $item['id']])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este usuario">
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
</div>            


@endsection


  