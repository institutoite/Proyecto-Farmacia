@extends('theme.lay');
@section('titulo')
    Tipo Producto
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
                             <h3 class="">LISTA TIPOS DE PRODUCTOS</h3> 
                       
                        <nav class="navbar navbar-light ">
                            <form class="form-inline">
                                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Criterio buscar" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
                                
                            </form>
                            <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_tipoproducto')}}">Crear Tipo Producto</a></h3>
                        </nav>  
                        
                        @if(can('tipoproducto.index'))    
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr class="bg-info">
                                        <th>Nº</th>
                                        <th>Nombre</th>
                                        <th class="width70">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Dato as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->nombre}}</td>
                                            <td>

                                                @if(can('tipoproducto.editar'))
                                                <a href="{{route('editar_tipoproducto', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                @endif
                                                @if(can('tipoproducto.eliminar'))
                                                <form action="{{route('eliminar_tipoproducto', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
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
                                No tiene permiso para ver este contenido.
                            @endif
                        </div>
                    </div>
           
                </div>      
                  
            </div>
        </div>
    </div>
</div>            


@endsection


  