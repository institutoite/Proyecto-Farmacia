@extends('theme.lay')
@section('titulo')
    Sistema menus
@endsection

@section("styles")
<link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
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
                        <div class="card-header">
                            <h3 class="card-title">FORMULARIO CREAR MENUS</h3>
                        </div>
                        <div class="card-body">   
                            @csrf
                            <div class="card-header">
                                <h3 class="card-title"><a class="btn btn-success" href="{{route('menu_crear')}}">Crear Menu</a></h3>
                            </div>
                            <div class="dd" id="nestable">
                                <ol class="dd-list">
                                    @foreach ($menus as $key => $item)
                                        @if ($item["menu_id"] != 0)
                                            @break
                                        @endif
                                        @include("admin.menu.menu-item",["item" => $item])
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
           
                </div>      
                  
            </div>
        </div>
    </div>
</div>            


@endsection


  