<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Студия дизайна интерьера и мебели Юлии Сазоновой';
$this->registerJs('
		$(".fotorama").fotorama({
			width: "100%",
			ratio: 2/1,
			autoplay: 2000,
			data:[
				{img: "/images/meet-slide-1-20170701.jpg"},
				{img: "/images/meet-slide-2-20170701.jpg",fit:"cover",html:"<div class=\"slide-caption\"><h3>Мебель</h3><a href=\"#\" class=\"btn-light\">Подробнее</a></div>"},
				{img: "/images/meet-slide-3-20170701.jpg",fit:"cover",html:"<div class=\"slide-caption\"><h3>Каменный шпон</h3><a href=\"/decor/1\" class=\"btn-light\">Подробнее</a></div>"}
			],
		});
	');

?>
	
<div class="row">
	<div class="col-md-12">
		<div class="fotorama"></div>		
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="baner">
			<h2>Беспрецедентная акция!</h2> 
			<h3>Дизайн проект "4 звезды" за 650 руб</h3>
			<a href='/service/4' class="btn btn-dark">Подробнее</a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<img src="/images/meet-stone-20170701.jpg"" class='img-fluid' alt="">
		<div class="homepage-banner-link">
			<a href="/decor/1" class='white' >КАМЕННЫЙ ШПОН</a>
		</div>
	</div>
	<div class="col-md-6">
		<img src="/images/meet-finish-20170701.jpg" class='img-fluid' alt="">
		<div class="homepage-banner-link">
			<a href="/decor/2" class='white' >НАШИ ФИНИШИ</a>
		</div>
	</div>
</div>

<br><br>
<div class="row">
	<div class="col-md-3 col-sm-6 text-center grid-item">
		<a href="/contacts" class="btn btn-dark btn-block">КОНТАКТЫ</a>
	</div>
	<div class="col-md-3 col-sm-6 text-center grid-item">
		<a href="/projects/index" class="btn btn-dark btn-block">ИНТЕРЬЕР</a>
	</div>
	<div class="col-md-3 col-sm-6 text-center grid-item">
		<a href="/furniture" class="btn btn-dark btn-block">МЕБЕЛЬ</a>
	</div>
	<div class="col-md-3 col-sm-6 text-center grid-item">
		<a href="/decor" class="btn btn-dark btn-block">ДЕКОР</a>
	</div>
</div>
