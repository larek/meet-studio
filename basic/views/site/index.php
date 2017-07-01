<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Студия дизайна интерьера и мебели Юлии Сазоновой';
$this->registerJsFile('/bower_components/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
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
	

<div class="fotorama">

</div>

<div class="baner">
	<h2>Беспрецедентная акция!</h2> 
	<h3>Дизайн проект "4 звезды" за 650 руб</h3>
	<a href='/service/4' class="btn-black">Подробнее</a>
</div>

	<div id="row" class="home_mr-top">
		<div class="second-slide align-left mr-right-2">
			<div class="flexslider">
				<ul class="slides">
					<li class="box-hover">
						<a href="/decor/2">
				    		<img src="/images/meet-finish-20170701.jpg" />
				    	</a>
						<div class="hover-homepage background-color-hover" style='margin-bottom:20px'>
							<span class="name">
								<a href='/decor/2'>
									НАШИ ФИНИШИ
								</a>
							</span>
							
						</div>
					
				    </li>
					<l
				</ul>
			</div>
		</div>
		<div class="second-slide align-right">
			<div class="flexslider">
				<ul class="slides">
					<li class="box-hover">
						<a href="/decor/1">
							<img src="/images/meet-stone-20170701.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover" style='margin-bottom:20px'>
							<span class="name">
								<a href='/decor/1'>
									Каменный шпон
								</a>
							</span>
						</div>
				    </li>

								    
				</ul>
			</div>
		</div>
	</div>
	<div id="middle-info">
		<div class="middle-info-box">
			<a href="/contacts">КОНТАКТЫ</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="/projects/index">ИНТЕРЬЕР</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="/furniture">МЕБЕЛЬ</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="/decor" target="_blank">ДЕКОР</a>
		</div>
		<div class="clear"></div>
	</div>

</div>

	<div class="clear"></div>

