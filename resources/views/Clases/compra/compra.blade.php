@extends('theme.lay')
@section('titulo')
    Compra
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
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            <span>Codigo Cliente:{{$Compra->proveedor_id}} </span><br>
                            <span>Nombre Cliente:{{$Persona->nombre ." ". $Persona->apellidop." ".$Persona->Apellidom}}</span>
                        </div>
                        <form action="{{ route('agregar_detalle_compra')}}" class="form-inline">
                            @csrf
                            <input name="idcompra" type="text" value="{{$Compra->id}}" hidden>   
                            @include('includes.form_producto_compra')
                        </form>
                         

                        <div class="form-group">
                            <table class="table table-hover table-striped" id="tablaproductos">
                                <thead>                  
                                    <tr>
                                        <th>Producto</th>
                                        <th>Detalle</th>
                                        <th>CostoUnitario</th>
                                        <th>Cantidad</th>
                                        <th>SubTotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        
                                        {{--dd($Venta)--}}
                                        @foreach ($Compra->productos as $id => $item)
                                         <tr>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->detalle}}</td>
                                        <td>{{$item->pivot->preciounitario}}</td>
                                        <td>{{$item->pivot->cantidad}}</td>
                                        <td>{{$item->pivot->subtotal}}</td>
                                        
                                       
                                            <td>
                                            <form action="{{route('eliminar_detalle', ['id' => 5])}}" class="d-inline form-eliminar" method="POST">
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
</div>            


@endsection