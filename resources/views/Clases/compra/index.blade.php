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
                            <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_compra')}}">Nueva Compra</a></h3>
                        </div>
                        <div class="card-body">
                       <nav class="navbar navbar-light">
                            <a class="navbar-brand">Busqueda de compras</a>
                            <form class="form-inline">
                                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Escribe aqui que desea buscar" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
                            </form>
                        </nav>
                                                
                            @csrf   
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr>
                                     
                                        <th>Fecha</th>
                                        <th>Observacion</th>
                                        <th>Proveedor</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($Compras as $compra)
                                        <tr>
                                                 
                                                <td>{{$compra['fecha']}}</td>
                                                <td>{{$compra['observacion']}}</td>
                                                <td>{{$compra['proveedor']['razonsocial']}}</td>
                                                <td>
                                                <a href="{{route('editar_compra', ['id' =>$compra['id']])}}" class="btn-accion-tabla tooltipsC" title="Editar este usuario">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                <form action="{{route('eliminar_compra', ['id' => $compra['id']])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este Persona">
                                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                                </td>
                                                <td>
                                                    
                                                    <a href="{{route('generar_compra', ['id' => $compra['id']])}}" class="btn-accion-tabla tooltipsC" title="Editar este usuario">
                                                <i class="fa fa-fw fa-list text-primary"></i>
                                                </a>
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