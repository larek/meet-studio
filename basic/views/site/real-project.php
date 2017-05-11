<?
$this->title = 'Реализованные проекты';
$this->registerJsFile('/bower_components/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('/js/fotorama-fullscreen.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
$this->registerCssFile('/bower_components/font-awesome/css/font-awesome.min.css');
?>
<h1><?= $this->title;?></h1>
<span class='btn-fotorama-fullscreen'><i class='fa fa-arrows-alt'></i> Развернуть на весь экран</span>
<div class="fotorama" data-width='100%' data-nav-position='top' data-nav='thumbs' data-allowfullscreen='true' data-autoplay='3000'>
	<img src="/images/real-projects/1/01.jpg" alt="">
	<img src="/images/real-projects/1/02.jpg" alt="">
	<img src="/images/real-projects/1/03.jpg" alt="">
	<img src="/images/real-projects/1/04.jpg" alt="">
	<img src="/images/real-projects/1/05-1.jpg" alt="">
	<img src="/images/real-projects/1/05-2.jpg" alt="">
	<img src="/images/real-projects/1/06.jpg" alt="">
	<img src="/images/real-projects/1/07.jpg" alt="">
	<img src="/images/real-projects/1/08.jpg" alt="">
	<img src="/images/real-projects/1/09.jpg" alt="">
	<img src="/images/real-projects/1/10.jpg" alt="">
	<img src="/images/real-projects/1/11.jpg" alt="">
	<img src="/images/real-projects/1/12.jpg" alt="">
	<img src="/images/real-projects/1/13.jpg" alt="">
	<img src="/images/real-projects/1/14.jpg" alt="">
	<img src="/images/real-projects/1/15.jpg" alt="">
	<img src="/images/real-projects/1/16.jpg" alt="">
	<img src="/images/real-projects/1/17.jpg" alt="">
</div>

<br>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/LqOyETG6EAM" frameborder="0" allowfullscreen></iframe>