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
                        <div class="card-header">
                            <h3 class="card-title"><a class="btn btn-success" href="{{route('crear_tipoproducto')}}">Crear Tipoproducto</a></h3>
                        </div>     
                            <table class="table table-hover table-striped">
                                <thead>                  
                                    <tr>
                                        <th>Nº</th>
                                        <th>Nombre</th>
                                        <th class="width70">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Dato as $data)
                                        <tr>
                                            <td>#</td>
                                            <td>{{$data->nombre}}</td>
                                            <td>
                                                <a href="{{route('editar_tipoproducto', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                                <i class="fa fa-fw fa-edit text-primary"></i>
                                                </a>
                                                <form action="{{route('eliminar_tipoproducto', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method("delete")
                                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
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
</div>            


@endsection


  