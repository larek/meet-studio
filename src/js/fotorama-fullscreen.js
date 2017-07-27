$(document).ready(() => {
    $(".btn-fotorama-fullscreen").click(() => {
        var $fotoramaDiv = $('.fotorama').fotorama();
        var fotorama = $fotoramaDiv.data('fotorama');
        fotorama.requestFullScreen();
    });
})