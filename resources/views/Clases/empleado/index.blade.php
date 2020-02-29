@extends('theme.lay')
@section('titulo')
    Empleado
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
                            <h3 class="">LISTA TIPOS DE EMPLEADO</h3> 
                       
                        <nav class="navbar navbar-light ">
                            <form class="form-inline">
                                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Escribe aqui que desea buscar" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
                            </form>
                            <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_empleado')}}">Crear Empleado</a></h3>
                        </nav>  
                        </div>
                        <div class="card-body">
                      
                                                
                            @csrf  
                              @if(can('empleado.index')) 
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr class="bg-info">
                                     
                                        <th>NOMBRE</th>
                                        <th>APELLIDOS</th>
                                        
                                        <th>FECHA NAC</th>
                                        
                                        <th>CELULAR</th>
                                        <th>SUELDO</th>
                                        <th>INGRESO</th>
                                        <th class="width70">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($Personas as $empleados)
                                        <tr>
                                            @if($empleados['empleado']['persona_id']>0)
                                                <td>{{$empleados['nombre']}}</td>
                                                <td>{{$empleados['apellidop'].' '.$empleados['apellidom']}}</td>
                                                
                                                <td>{{$empleados['fechanacimiento']}}</td>
                                                
                                                <td>{{$empleados['celular']}}</td>
                                                <td>{{$empleados['empleado']['sueldo']}}</td>
                                                <td>{{$empleados['empleado']['fechaingreso']}}</td>

                                                <td>
                                                @if(can('empleado.editar'))
                                                <a href="{{route('editar_empleado', ['id' =>$empleados['empleado']['id']])}}" class="btn-accion-tabla tooltipsC" title="Editar este usuario">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                @endif
                                                @if(can('tipoproducto.editar'))
                                                <form action="{{route('eliminar_empleado', ['id' => $empleados['empleado']['id']])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este Persona">
                                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                                @endif    
                                            </td>
                                            @endif
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            @else 
                                No tiene permiso para ver esta seccion 
                            @endif
                        </div>
                    
           
                </div>      
                  
            </div>
        </div>
    </div>
</div>            


@endsection


  