<?
$this->title = 'Наши финиши';
$this->registerJsFile('/bower_components/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
?>
<div class="row">
	<div class="col-md-12">
		<h1>Наши финиши</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="fotorama" data-width='100%' data-nav-position='bottom' data-nav='thumbs' data-allowfullscreen='true'>
			<img src="/images/decor/2/7.jpg" alt="">
			<img src="/images/decor/2/8.jpg" alt="">
			<img src="/images/decor/2/9.jpg" alt="">
			<img src="/images/decor/2/10.jpg" alt="">
			<img src="/images/decor/2/11.jpg" alt="">
			<img src="/images/decor/2/12.jpg" alt="">
		</div>
	</div>
	<div class="col-md-6">
		<p>Кожа коллекции OLD с эффектом старения! Без тиснения. Сохраняющая на себе прижизненные пороки на шкуре животного. Эта кожа высокого качества и относится к Категории «А».</p>
	</div>
</div>
