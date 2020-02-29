@extends('theme.lay')

@section('Titulo')
    Editar TipoProducto
@endsection

@section('scripts')
 <script src="{{asset('assets/pages/scripts/admin/menu/crear.js')}}" type="text/javascript"></script>   
@endsection
@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    
                     <div class="card-body table-responsive no-padding">
                              <!-- Horizontal Form -->
            @include('includes.form-error')    
            @include('includes.mensaje')             
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">FORMULARIO EDITAR TIPO PRODUCTO</h3>
              </div>
            
              <form action="{{ route('actualizar_producto',['id'=>$Datos->id]) }}"  id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="card-body">   
                  
                  @include('Clases.producto.form')
                </div>
                <div class="card-footer">   
                  @include('includes.boton_form_editar')
                </div>
              </form>
            </div>
            <!-- /.card -->
                    </div>    
                </div>
            </div>
        </div>
    </div>            
@endsection