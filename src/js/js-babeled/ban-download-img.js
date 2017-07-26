'use strict';

$(document).ready(function () {
	$('.fotorama').on('fotorama:load', function (e, fotorama, extra) {
		var img = document.getElementsByTagName('img');
		for (var i in img) {
			img[i].oncontextmenu = function () {
				return false;
			};
		}
	});
});