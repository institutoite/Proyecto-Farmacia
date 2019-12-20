@extends('theme.lay')

@section('Titulo')
    Permisos
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                     <div class="card-header bg-info">
                        <h3 class="card-title">FORMULARIO CREAR</h3>
                    </div>
                     <div class="card-body table-responsive no-padding">
                        <form action="{{route('guardar_permiso')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off" >
                            @csrf 
                            <div class="card-body">
                                @include('Admin.permiso.form')
                            </div>
                            @include('includes.boton_agregar')       
                        </form> 
                    </div>    
                </div>
            </div>
        </div>
    </div>            
@endsection