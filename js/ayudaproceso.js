$(document).ready(function () {
    var botonsig = document.getElementById("siguiente");
    $(".container-fluid.mt-4").click(function () {
        tarjeton = $(this).attr("id");
    });
    $(".border-primary.card").click(function () {
        var idCandidato = $(this).attr("id");
        let aver = document.getElementById("selecciona").innerHTML = idCandidato;
    });
    $(botonsig).click(function () {
        let aver = document.getElementById("selecciona").textContent;
        $($.ajax({
            type: "POST",
            url: "datosVotos.php",
            data: {
                "idCandidato": aver
            },
            success: function (response) {
                if (response == 11) {}
            }
        }));
        return false;
    });
});