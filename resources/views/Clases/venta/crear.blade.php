@extends('theme.lay')

@section('Titulo')
    Empleado
@endsection

@section('scripts')
 <script src="{{asset('assets/pages/scripts/admin/menu/crear.js')}}" type="text/javascript"></script>   
 <script src="{{asset('assets/js/compra.js')}}" type="text/javascript"></script>     
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
                <h3 class="card-title">FORMULARIO CREAR VENTA</h3>
              </div>
              
              <form action="{{ route('guardar_venta') }}"  id="form-general" class="form-inline" method="POST" autocomplete="on">
                @csrf

                <div class="card-body"> 
                    
                  @include('Clases.venta.form')
                  <br>
                  
                  
  
                </div>
                

                <div class="card-footer">   
                  @include('includes.boton_form_crear')
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

