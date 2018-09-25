$(document).ready(function() {
  var url = "pages/login_modal.php";
  $('#loginBtn').click (function(e) {
    $('.modalContainer').load(url, function(result) {
      $('#loginModal').modal({show:true});
    });
  });

  $(document).on("click",".btn-group > .btn", function(){
    $(".btn-group > .btn").removeClass("active");
    $(this).addClass("active");
  });

  $(document).on("hidden.bs.modal", "#loginModal", function () {
    $('#loginModal').remove(); // Remove from DOM.
  });
});

function verificaPassword() {
  $('#loginModal').modal('toggle');
  $.ajax({
    type: "POST",
    data: $('#loginForm').serialize(),
    url: "pages/login_controller.php",
    success: function(data) {
      if(data) {
        $.alert({
    title: 'Mensaje',
    content: 'Ha ingresado correctamente!',
      });
      } else {
        $.alert({
    title: 'Alerta!',
    content: 'Falló el ingreso!',
});
      }
    }
  });
}
