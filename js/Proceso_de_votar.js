$(document).ready(function () {
  var botonsig = document.getElementById("siguiente");
  $(".border-primary.card").click(function () {
    const inputs = document.querySelectorAll('input[type=radio]');
    const candidatos = document.querySelectorAll('.border-primary.card');
    $(inputs).on('change', function () {
      for (let i = 0; i < inputs.length; i++) {
        const element = inputs[i];
        const elemento = candidatos[i];
        var elementi = ($(element).is(':checked'));
        if (elementi === true) {
          $(botonsig).removeClass('disabled')
          $(elemento).addClass('active');
        } else {
          $(elemento).removeClass('active');
        }
      };
    });
  });
});