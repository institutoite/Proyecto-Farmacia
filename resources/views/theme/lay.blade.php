<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('Titulo','Farmacia')| Farmavida</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/lte/dist/css/adminlte.min.css')}}">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  
  <link rel="stylesheet" href="{{asset("assets/lte/plugins/daterangepicker/daterangepicker.css")}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset("assets/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset("assets/lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset("assets/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset("assets/lte/plugins/select2/css/select2.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset("assets/lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   @yield('styles')

  <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
  <!-- Theme style -->
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
         @include('theme/header')
        <!-- inicio aside -->
        @include('theme/aside')
        <!-- fin aside -->
    <div class="content-wrapper">
         <!-- inicio  header   -->
       
        <!-- fin header -->
        <section class="content-header">
            <div class="container-fluid">
              
            </div><!-- /.container-fluid -->
        </section> 

         <!-- Main content -->
        <section class="content">
            @yield('contenido')
        </section>
        <!-- /.content -->

    </div>    
        <!-- inicio  footer -->
        @include('theme/footer')
        <!-- inicio  footer -->
        
    </div>

<p><button class="preview"> Preview</button></p>


<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}" ></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>

@yield('scriptsPlugins')

<script src="{{asset('assets/js/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-validation/localization/messages_es.min.js')}}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{asset('assets/js/scritps.js')}}"></script>
<script src="{{asset('assets/js/funciones.js')}}"></script>

@yield('scripts')
</body>
</html>