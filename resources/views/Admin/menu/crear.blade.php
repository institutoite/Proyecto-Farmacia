@extends('theme.lay')

@section('Titulo')
    Sistema de menu
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    
                     <div class="card-body table-responsive no-padding">
                              <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">FORMULARIO CREAR MENUS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('menu_guardar') }}"  id="for-general" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">   
                  @include('Admin.menu.form')
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