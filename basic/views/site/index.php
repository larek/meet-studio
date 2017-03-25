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
				{img: "/images/meet-slider1-background.png", fit: "cover",html: "<img src=\"/images/meet-slider1-image1-reverse.png\" style=\"height:100%\"><img src=\"/images/meet-slider1-image2.png\" style=\"position: absolute;top: -40%;height: 140%;right: 0;\"><div class=\"\" style=\"position: absolute;top: 100px;width: 88%;text-align: center;font-size: 30px;\">ALABAMA / Стол*</div><div style=\"position: absolute;top: 200px;width: 50%;text-align: center;left: 19%;font-size:19px\">Современный, утонченный и изящный стол. Подходитдля классическогои современного интерьера. Идеально в писывается в любое пространство</div><div style=\"bottom: 15px;position: absolute;width: 50%;text-align: center;left: 19%;\">Это изделие ЛИДЕР ПРОДАЖ</div>"},
				{img: "/images/meet-slide-2.jpg"}
			],
		});
	');

?>
	



<div class="fotorama">

</div>

	<div id="row" class="home_mr-top">
		<div class="second-slide align-left mr-right-2">
			<div class="flexslider">
				<ul class="slides">
					<li class="box-hover">
						<a href="">
				    		<img src="/images/meet-finish.png" />
				    	</a>
						<div class="hover-homepage background-color-hover" style='margin-bottom:20px'>
							<span class="name">
								<a href=''>
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
							<img src="/images/meet-stone.jpg" class="zindex_bottom"/>
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
			<a href="">КОНТАКТЫ</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="">ИНТЕРЬЕР</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="">МЕБЕЛЬ</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="" target="_blank">ДЕКОР</a>
		</div>
		<div class="clear"></div>
	</div>

</div>

	<div class="clear"></div>

