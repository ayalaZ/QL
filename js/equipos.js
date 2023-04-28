$(document).ready(function() {
    // Desplazar el contenido de la página al hacer hover en el menú lateral
    $(".navbar-nav").hover(
      function() {
        $("body").css("margin-left", "10%");
      },
      function() {
        $("body").css("margin-left", "0");
      }
    );
  });
  

