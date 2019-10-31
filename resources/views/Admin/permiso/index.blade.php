@extends('theme.lay')

@section('Titulo')
    persmisos
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                     <div class="card-header bg-primary">
                        <h3 class="card-title">lista de Permisos</h3>
                    </div>
                     <div class="card-body table-responsive no-padding">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>SLUG</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permisos as $permisito)
                                    <tr>
                                        <td>{{ $permisito->id}}</td>
                                        <td>{{ $permisito->nombre}}</td>
                                        <td>{{ $permisito->slug}}</td>
                                        <td>{{ $permisito->slug}}</td>
                                        
                                    </tr>  
                                @endforeach
                            </tbody>    
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>            
@endsection