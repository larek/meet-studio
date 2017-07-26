$(document).ready(function(){
	$('.fotorama').on('fotorama:load', function (e, fotorama, extra) {
	  let img = document.getElementsByTagName('img');
	    for (let i in img) {
	        img[i].oncontextmenu = function() {
	            return false;
	        };
	    }
	});
});