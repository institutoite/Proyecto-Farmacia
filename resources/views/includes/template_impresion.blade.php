<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
<link rel="stylesheet" href="{{asset("assets/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset("assets/lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
    <style>
        .texto{
            color: dimgray;
            font-size: 8px;
        }
        .derecha{
            text-align: right;
        }
    </style>
</head>
<body>
   <header>
        <table>
                <tr>
                    <td class="derecha"><img src="{{asset('assets/imagenes/logo.jpeg')}}" alt=""></td>
                    <td><h3>Farma Vida </h3></td>
                        <td>
                        <p class="texto">
                        <span>Direccion:</span> Tres pasos al Frente esquina Che Guevara # 4710 <br>
                        <span>Mail:</span> cualquiercosa@gmail.com<br>
                        <span>Tel:</span> 3-9564545<br>
                        <span>Cel:</span> 741524541<br>
                        </p> 
                </td>
            </tr>
        </table>
             
    <hr style="color:gray;" />
   </header>
   
   <section class="content">
        @yield('areaimpresion')
    </section>
    
</body>
</html>



