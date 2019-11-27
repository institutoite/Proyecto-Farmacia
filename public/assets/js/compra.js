
$(document).ready(funcionPrincipal);

function funcionPrincipal()
{
    $("#btnnuevafila").on('click',FuncionNuevaFila);  
 
   
   
    /*$.get("productillos", function (response, opciones) {
        console.log(response);*/
  //  $("#btnnuevafila").on('click', llenar); 
    // ListarProductos();
   // });
}



/*
        $.get("productillos", function (response, producto) {
            console.log(response);
            
            for (i = 0; i < response.length; i++) {
                $("#productillos").append("<option value='" + response[i].id + "'>" + response[i].nombre + "</option>");
            }
        });
*/







/*function llenar(){
  //este carga valores estaticos
    $('.opciones').empty();
    for (i = 0; i < 10; i++) {
        $(".opciones").append("<option value='5'>" + "opciones" + "</option>");
    }
}*/

/*function Llenar() {
    $('#btnnuevafila').change('click', function (event) {
        $.get("productillos", function (response, producto) {
            console.log(response);
            for (i = 0; i < response.length; i++) {
                $("#productillos").append("<option value='" + response[i].id + "'>" + response[i].nombre + "</option>");
            }
        });
    });*/
  


var ListarProductos = function () {
    $.ajax({
        type: "GET",
        url: "Clases/compra/productillos",
        data: {
            id: 1,
            name: 'Carlos Benitez',
            pass: '1234567890'
        },
        success: function (data) {
            console.log("First Method Data Saved: ", data);
        }
    });
   // alert('acabo de correr la funcion ajax')
}   


function FuncionNuevaFila() 
{
    $("#tablaproductos")
    .append(
        $('<tr>')
        .append(
            $('<td>')
                .append(
                    $('<select>').addClass('opciones')
                                       

                )    
            )
        
            .append(
                $('<td>')
                    .append(
                        $('<p>').text('detalle')
                    )
            )
            .append(
                $('<td>')
                .append(
                    $('<p>').text('2')
                )
            )
            .append(
                $('<td>')
                    .append(
                        $('<input>').attr('type','text').attr('value','25')
                    )
            )
            .append(
                $('<td>')
                .append(
                    $('<p>').text('10')
                )
            )
            .append(
                $('<td>')
                .append(
                    $('<a>').text('dfsds')
                )
            )
            
    )
    ListarProductos();
    //alert('estoy pasando por aqui');

    /*$.get(route('litar'), function (res) {
        $(res).each(function (key, value) {
            $('.opciones').append("<option>" + value.nombnre + "</option>");
        });
        
    }); */
   
       
}