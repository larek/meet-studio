'use strict';

$(function () {

    var getImages = function getImages() {
        var id = $(".photo-wrapper").attr('id');
        $.get('getimages', { id: id }).done(function (response) {
            $(".panel-body").html(response);

            $(".removeImg").click(function (e) {
                var id = $(e.currentTarget).attr("id");
                var pid = $(e.currentTarget).attr("data-pid");
                $.post("removeimg", { "id": id, "pid": pid }).done(function (data) {
                    getImages();
                });
            });

            $(".mainImg").click(function (e) {
                var id = $(e.currentTarget).attr("id");
                var pid = $(e.currentTarget).attr("data-pid");
                $.post("mainimg", { "id": id, "pid": pid }).done(function () {
                    getImages();
                });
            });
        });
    };

    getImages();
});