@extends('theme.lay')
@section('titulo')
    Venta
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
                            <span>Codigo Cliente:{{$Venta->cliente_id}} </span><br>
                            <span>Nombre Cliente:{{$Persona->nombre ." ". $Persona->apellidop." ".$Persona->Apellidom}}</span>
                        </div>
                        <form action="{{ route('agregar_detalle')}}" class="form-inline">
                            @csrf
                            <input name="idventa" type="text" value="{{$Venta->id}}" hidden>   
                            @include('includes.form_producto')
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
                                        @foreach ($Venta->productos as $id => $item)
                                         <tr>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->detalle}}</td>
                                        <td>{{$item->pivot->preciounitario}}</td>
                                        <td>{{$item->pivot->cantidad}}</td>
                                        <td>{{$item->pivot->subtotal}}</td>
                                        
                                       
                                            <td>
                                            <form action="{{route('eliminar_detalle_venta',['idventa' => $Venta->id,'idproducto'=>$item->id])}}" class="d-inline form-eliminar" method="POST">
                                                @csrf @method("delete")
                                                <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este producto">
                                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                                </button>
                                            </form>
                                        </td>   
                                        </tr> 
                                        @endforeach
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$Suma ?? '0'}}</td>
                                </tbody>
                            </table>
                                 <div class="row">
                                    <div>
                                        <a href="{{route('imprimir_venta',['idventa'=>$Venta->id])}}" class="btn btn-success">Aceptar</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>      
                  
            </div>
        </div>
    </div>
</div>            


@endsection