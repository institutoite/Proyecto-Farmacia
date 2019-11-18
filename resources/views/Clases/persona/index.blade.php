@extends('theme.lay')
@section('titulo')
    Persona
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
                            <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_persona')}}">Crear Persona</a></h3>
                        </div>
                        <div class="card-body">
                            @csrf   
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>ApellidoP</th>
                                        <th>ApellidoM</th>
                                        <th>FechaNac</th>
                                        <th>Direccion</th>
                                        <th>Genero</th>
                                        <th>Telefono</th>
                                        <th>Celular</th>
                                         <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>#</td>
                                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->apellidop}}</td>
                                            <td>{{$item->apellidom}}</td>
                                            <td>{{$item->fechanacimiento}}</td>
                                            <td>{{$item->direccion}}</td>
                                            <td>{{$item->genero}}</td>
                                            <td>{{$item->telefono}}</td>
                                            <td>{{$item->celular}}</td>
                                            
                                            <td>
                                                <a href="{{route('editar_persona', ['id' => $item->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este usuario">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                <form action="{{route('eliminar_persona', ['id' => $item->id])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este Persona">
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


  