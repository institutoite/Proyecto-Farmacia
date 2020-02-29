$(function() {
    $('#id_producto').on('change',PasarDato);
    $('#id_agregar').on('submit', validacion);
    //$('#id_agregar').on('mousemove', DeshabilitarBoton);
});


function PasarDato() {
    var producto_id=$(this).val();
    $('#id_cantidad').val(1);
    $.get('/api/producto/'+producto_id+'/stock', function(data){
      $('#id_stock').val(data[0].stock);
    });
    //return data[0].stock;

}


function validacion(){
    var cantidad;
    cantidad = $('#id_cantidad').val();
    stock = $('#id_stock').val();
    if(cantidad>stock){
       
        $('#id_cantidad').addClass("fondorojo");
        return false;
       
    }else{
        return true;
        $('#id_cantidad').addClass("bg-success");
    }
    
}