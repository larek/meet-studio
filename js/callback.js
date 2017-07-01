$(document).ready(function(){
	$(".btn-callBack").click(function(){
		let data = {};
		data.name = $(".callbackName").val();
		data.contact = $(".callbackContact").val();
		data.message = $(".callbackMessage").val();
		if(data.name == "" || data.contact == ""){
			$(".noticeBlock").html("<div class='alert alert-danger'>Заполните пожалуйста Имя и Контакты</div>")
		}else{
			$(".btn-callBack").html("Подождите...").attr("disabled","disabled");
			$.post('/site/callback',{ data : data }).done(function(response){
			console.log(response);
				if (response) {
					$(".btn-callBack").html("Отправить").removeAttr("disabled");
					$("input").val("");
					$("textarea").val("");
					$(".noticeBlock").html("<div class='alert alert-success'>Ваши контакты успешно отправлены. Мы скоро свяжемся с вами</div>");
				}else{
					$(".noticeBlock").html("<div class='alert alert-danger'>Произошла ошибка, попробуйте позже</div>");
				}
				

			})
		}
		
	})
});