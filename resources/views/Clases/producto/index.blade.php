@extends('theme.lay');
@section('titulo')
    Producto
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
                      
                <div class="card-body table-responsive no-padding">
                              <!-- Horizontal Form -->
                     
                    <div class="card card-info">
                         

                        <div class="card-body"> 
                              <h3 class="">LISTA DE PRODUCTOS</h3> 
                              <nav class="navbar navbar-light ">
                                    <form class="form-inline">
                                        <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Criterio buscar" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
                                    </form>
                                        
                                    <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_producto')}}">Crear Producto</a></h3>
                                       
                                </nav>    
                            @if(can('producto.index'))
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr class="bg-info">
                                        <th>Nº</th>
                                        <th>NOMBRE</th>
                                        <th>DETALLE</th>
                                        <th>COSTO</th>
                                        <th class="width70">OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Datos as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->nombre}}</td>
                                            <td>{{$data->detalle}}</td>
                                            <td>{{$data->costo}} Bs.</td>
                                            <td>
                                                 @if(can('producto.editar'))    
                                                <a href="{{route('editar_producto', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                @endif

                                                 @if(can('producto.eliminar'))
                                                <form action="{{route('eliminar_producto', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>    
                                    @endforeach
                                </tbody>
                            </table>
                            @else 
                                No tiene permiso para ver este contenido
                            @endif
                        </div>
                    </div>
           
                </div>      
                  
            </div>
        </div>
    </div>
</div>            


@endsection


  