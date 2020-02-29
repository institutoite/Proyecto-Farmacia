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
                         <nav class="navbar navbar-light">
                            <a class="navbar-brand">Busqueda de empleados</a>
                            <form class="form-inline">
                                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Escribe aqui que desea buscar" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
                            </form>
                        </nav>
                        <div class="card-body">
                            @csrf   
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr>
                                        <th>N</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        
                                        <th>FechaNac</th>
                                        <th>Direccion</th>
                                        
                                        
                                        <th>Celular</th>
                                         <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(can('persona.index'))
                                    @foreach ($data as $item)
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->apellidop.' '.$item->apellidom}}</td>
                                            
                                            <td>{{$item->fechanacimiento}}</td>
                                            <td>{{$item->direccion}}</td>
                                           
                                          
                                            <td>{{$item->celular}}</td>
                                            
                                            <td>
                                                @if(can('persona.editar'))
                                                <a href="{{route('editar_persona', ['id' => $item->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este usuario">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a> 
                                                @endif
                                               
                                                @if(can('persona.eliminar'))
                                                <form action="{{route('eliminar_persona', ['id' => $item->id])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este Persona">
                                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                                 @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else 
                                        No tiene permiso de ver este contenido
                                    @endif            
                                </tbody>
                            </table>
                        </div>
                    
           
                </div>      
                  
            </div>
        </div>
    </div>
</div>            


@endsection


  