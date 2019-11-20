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
                            <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_empleado')}}">Crear Empleado</a></h3>
                        </div>
                        <div class="card-body">
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
                                        <th>sueldo</th>
                                        <th>FechaIn</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($Personas as $empleados)
                                        <tr>
                                            @if($empleados['empleado']['persona_id']>0)
                                                <td>{{$empleados['nombre']}}</td>
                                                <td>{{$empleados['apellidop']}}</td>
                                                <td>{{$empleados['apellidom']}}</td>
                                                <td>{{$empleados['fechanacimiento']}}</td>
                                                <td>{{$empleados['genero']}}</td>
                                                <td>{{$empleados['celular']}}</td>
                                                
                                                <td>{{$empleados['empleado']['sueldo']}}</td>
                                                <td>{{$empleados['empleado']['fechaingreso']}}</td>
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


  