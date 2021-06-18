$(document).ready(function(){
    $('#enviarsesion').click(function(){
           let datosformulario=$('#iniciarsesion').serialize();
           console.log(datosformulario);
        $.ajax({
            type:'POST',
            url:'validar2.php',
            data: datosformulario,
            success:function(respuesta){
                console.log(respuesta);
                if(respuesta == 1){
                    location.href= "Principal.php";
                }else{
                    function traeralert(){
                    $.ajax({
                        url: 'alert_error.html',
                    })
                    .done(function(traido){
                        $('#alert_error').html(traido);
                    })
                }
                traeralert();
                }
            }
        });
        return false;
    });
}); 