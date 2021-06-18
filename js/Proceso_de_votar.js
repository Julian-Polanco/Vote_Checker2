$(document).ready(function(){
    $(".border-primary.card").click(function() {
      alert($(this).attr("id"))
      console.log($(this).attr("id"));
    });
  });