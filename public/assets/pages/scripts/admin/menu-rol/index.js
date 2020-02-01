

$(".menu_rol").on('change', function () {
    
    var data = {
        menu_id: $(this).data('menuid'),
        rol_id: $(this).val(),
        _token: $('input[name=_token]').val()
    };
    if ($(this).is(':checked')) {
        data.estado = 1
    } else {
        data.estado = 0
    }
    
    ajaxRequest("/Admin/menu-roles", data);
    
});

function ajaxRequest(url, data) {
   
    
    $.ajax({
        url:url,
        type:'POST',
        data: data,
        success:function(respuesta) {
            if (respuesta.respuesta =='El rol se asigno correctamente')
            {
                FarmaciaV.notificaciones(respuesta.respuesta, 'Farmacia', 'success');
                //alert(respuesta.respuesta);
            }    
            else{
                FarmaciaV.notificaciones(respuesta.respuesta, 'Farmacia', 'error');
                //alert(respuesta.respuesta);
            }
            

        }   
    });
     
} 
