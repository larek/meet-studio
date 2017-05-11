$(document).ready(function() {
  $(".btn-fotorama-fullscreen").click(function() {
    var $fotoramaDiv = $('.fotorama').fotorama();
    var fotorama = $fotoramaDiv.data('fotorama');
    fotorama.requestFullScreen();
  });
})
