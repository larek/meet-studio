<?
$this->title = 'Банкетка';
$this->registerJsFile('/bower_components/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
$this->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css");
?>
<div class="row">
	<div class="col-md-12">
		<h1><?= $this->title?></h1>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="fotorama" data-width='100%'data-nav-position='top' data-nav='thumbs' data-allowfullscreen='true'>
		<img src="/images/furniture/3/1.jpg" alt="">
		<img src="/images/furniture/3/2.jpg" alt="">
		<img src="/images/furniture/3/3.jpg" alt="">
		</div>	
	</div>
	<div class="col-md-12">
		<img src="/images/furniture/meet-interriour.jpg" class='img-responsive img-thumbnail' alt="">
	</div>

</div>
