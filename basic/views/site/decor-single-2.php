<?
$this->title = 'Каменный шпон';
$this->registerJsFile('/bower_components/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
?>
<h1>Каменный шпон</h1>
<p>Кожа коллекции OLD с эффектом старения! Без тиснения. Сохраняющая на себе прижизненные пороки на шкуре животного. Эта кожа высокого качества и относится к Категории «А».</p>
<div class="fotorama" data-width='100%' data-nav-position='top' data-nav='thumbs' data-allowfullscreen='true'>
	<img src="/images/decor/2/1.jpg" alt="">
	<img src="/images/decor/2/2.jpg" alt="">
	<img src="/images/decor/2/3.jpg" alt="">
	<img src="/images/decor/2/4.jpg" alt="">
	<img src="/images/decor/2/5.jpg" alt="">
	<img src="/images/decor/2/6.jpg" alt="">
</div>