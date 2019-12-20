<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>

    <style>
        .texto{
            color: dimgray;
            font-size: 8px;
        }
        .derecha{
            text-align: right;
        }
        .tabla{
            border: 1px solid #999999;
            width: 100%; 
            border-collapse: collapse;
        }
        .textotabla{
            font-size: 10;
            color: cadetblue;
        }
        .textodatos{
            font-size: 10;
            color: green;
        }

    </style>
</head>
<body>
    
   <header>
        <table >
                <tr>
                    <td class="derecha"><img src="{{'./assets/img/logo.jpg'}}" width="100" height="100" alt=""></td> <!-- ./assets/img/logo.jpg-->
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
   
   <div>
        <span>Codigo Cliente:{{$Venta->cliente_id}} </span><br>
        <span>Nombre Cliente:{{$Persona->nombre ." ". $Persona->apellidop." ".$Persona->Apellidom}}</span>
    </div>
    <table class="textotabla tabla" id="tablaproductos">
        <thead>                  
            <tr class="tabla">
                <th class="tabla">Producto</th>
                <th class="tabla">Detalle</th>
                <th class="tabla">CostoUnitario</th>
                <th class="tabla">Cantidad</th>
                <th class="tabla">SubTotal</th>
            </tr>
        </thead>
        <tbody class="tabla">
                @foreach ($Venta->productos as $id => $item)
                <tr class="tabla">
                <td class="tabla">{{$item->nombre}}</td>
                <td class="tabla">{{$item->detalle}}</td>
                <td class="tabla">Bs. {{$item->pivot->preciounitario}}</td>
                <td class="tabla">Unid.{{$item->pivot->cantidad}}</td>
                <td class="tabla">Bs. {{$item->pivot->subtotal}}</td>    
                </tr> 
                @endforeach
                <tr>
                <td colspan="4">Total</td>
                <td class="tabla">Bs. {{$Suma ?? '0'}}</td>
                </tr>
        </tbody>
    </table>
</body>
</html>