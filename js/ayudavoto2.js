$(document).ready(function () {
    var botonsig = document.getElementById("finalizar");
    $(".border-primary.card").click(function () {
        var idCandidato = $(this).attr("id");
        let aver = document.getElementById("seleccionar").innerHTML = idCandidato;
    });
    $(botonsig).click(function () {
        let aveir = document.getElementById("seleccionar").textContent;
        $($.ajax({
            type: "POST",
            url: "datosVotos2.php",
            data: {
                "idCandidato": aveir
            },
            success: function (response) {
                console.log(response);
                if (response == 11) {
                window.location.assign("Principal.php");

                }
            }
        }));
        return false;
    });
});