$(buscar_Datos());

function buscar_Datos(Consulta){
    $.ajax({
        url:'../Conexiones/BusquedaFiltrada_Miscelanea.php',
        type: 'POST',
        dataType: 'html',
        data:{Consulta:Consulta},
        
    })
    .done(function(respuesta){
        //console.log("success");
        $("#Datos").html(respuesta);
        })
    .fail(function(){
        console.log("error");
        });
    
}

$(document).on('keyup','#Caja_Busqueda',function(){
    var valor=$(this).val();
    if(valor !=""){
        buscar_Datos(valor);
        
    }
    else{
        buscar_Datos();
        
    }
    });