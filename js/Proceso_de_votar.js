$(document).ready(function () {
  $(".container-fluid.mt-4").click(function () {
    tarjeton = $(this).attr("id");
  });
  var botonsig = document.getElementById("siguiente");
  $(".border-primary.card").click(function () {
    var idCandidato = $(this).attr("id");
    var inputs = document.querySelectorAll('input[type=radio]');
    var candidatos = document.querySelectorAll('.border-primary.card');
    $(inputs).on('change', function () {
      for (let i = 0; i < inputs.length; i++) {
        let element = inputs[i];
        let elemento = candidatos[i];
        element = ($(element).is(':checked'));
        if (element === true) {
          $(botonsig).removeClass('disabled')
          $(elemento).addClass('active');
          var datos = {
            "idCandidato": idCandidato,
            "idTarjeton": tarjeton
          };
          var unir = idCandidato.concat(tarjeton);
          $(botonsig).click(function () {
            $($.ajax({
              type: "POST",
              url: "datosVotos.php",
              data: datos,
              success: function (response) {
                console.log(response);
                if (response == unir) {
                  console.log("enviado");
                }
              }
            }));
            return false;
          });
        } else {
          $(elemento).removeClass('active');
        }
      };
    });
  });
});