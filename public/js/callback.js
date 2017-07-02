'use strict';

$(document).ready(function () {
  $('.btn-callBack').click(function () {
    var data = {};
    data.name = $('.callbackName').val();
    data.contact = $('.callbackContact').val();
    data.message = $('.callbackMessage').val();
    if (data.name == '' || data.contact == '') {
      $('.noticeBlock').html('\n      \t\t<div class="alert alert-danger">\n      \t\t\t\u0417\u0430\u043F\u043E\u043B\u043D\u0438\u0442\u0435 \u043F\u043E\u0436\u0430\u043B\u0443\u0439\u0441\u0442\u0430 \u0418\u043C\u044F \u0438 \u041A\u043E\u043D\u0442\u0430\u043A\u0442\u044B\n      \t\t</div>\n      \t\t');
    } else {
      $('.btn-callBack').html('Подождите...').attr('disabled', 'disabled');
      $.post('/site/callback', { data: data }).done(function (response) {
        if (response) {
          $('.btn-callBack').html('Отправить').removeAttr('disabled');
          $('input').val('');
          $('textarea').val('');
          $('.noticeBlock').html('\n          \t\t<div class="alert alert-success">\n          \t\t\t\u0412\u0430\u0448\u0438 \u043A\u043E\u043D\u0442\u0430\u043A\u0442\u044B \u0443\u0441\u043F\u0435\u0448\u043D\u043E \u043E\u0442\u043F\u0440\u0430\u0432\u043B\u0435\u043D\u044B. \u041C\u044B \u0441\u043A\u043E\u0440\u043E \u0441\u0432\u044F\u0436\u0435\u043C\u0441\u044F \u0441 \u0432\u0430\u043C\u0438\n          \t\t</div>\n          \t\t');
        } else {
          $('.noticeBlock').html('\n          \t<div class="alert alert-danger">\n          \t\t\u041F\u0440\u043E\u0438\u0437\u043E\u0448\u043B\u0430 \u043E\u0448\u0438\u0431\u043A\u0430, \u043F\u043E\u043F\u0440\u043E\u0431\u0443\u0439\u0442\u0435 \u043F\u043E\u0437\u0436\u0435\n          \t</div>\n          \t');
        }
      });
    }
  });
});