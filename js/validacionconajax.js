$(document).ready(function () {
    $('#enviarsesion').click(function () {
        let datosformulario = $('#iniciarsesion').serialize();
        console.log(datosformulario);
        $.ajax({
            type: 'POST',
            url: 'validar2.php',
            data: datosformulario,
            success: function (respuesta) {
                console.log(respuesta);
                if (respuesta == 'R1') {
                    location.href = "admin.php";
                } else if(respuesta =='R2') {
                    location.href = "Principal.php";
                }else if(respuesta =='R3'){
                location.href = "candidato.php";
                }else{
                    function traeralert() {
                        $.ajax({
                                url: 'alert_error.html',
                            })
                            .done(function (traido) {
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