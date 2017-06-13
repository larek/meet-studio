<?
$this->title = 'Вешалка для одежды';
$this->registerJsFile('/bower_components/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('/js/ban-download-img.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
$this->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css");
?>
<div class="row">
	<div class="col-md-12">
		<h1><?= $this->title?></h1>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="fotorama" data-width='100%' data-nav-position='bottom' data-nav='thumbs' data-allowfullscreen='true'>
		<img src="/images/furniture/4/1.jpg" alt="">
		<img src="/images/furniture/4/2.jpg" alt="">
		<img src="/images/furniture/4/3.jpg" alt="">
		<img src="/images/furniture/4/4.jpg" alt="">
		<img src="/images/furniture/4/5.jpg" alt="">
		<img src="/images/furniture/4/6.jpg" alt="">
		<img src="/images/furniture/4/7.jpg" alt="">
		</div>	
	</div>
	<div class="col-md-6">
		<table class='table '>
			<tbody>
				<tr>
					<td>Размеры</td>
					<td>L 58 cm / 22,83”<br>D 20 cm / 7,87” <br> H 28 сm / 11”</td>
				</tr>
				<tr>
					<td>Описание изделия</td>
					<td>
						Вешалка настенная. В данном исполнении выполнена из пищевой нержавеющей стали. Высокая степень полировки до зеркального отражения.
					</td>
				</tr>
				<tr>
					<td>Материал изделия</td>
					<td>Полированная нержавеющая сталь</td>
				</tr>
			</tbody>
		</table>
		<br>
		<img src="/images/furniture/4/furniture-4-schema.png" class='img-responsive' alt="">
	</div>

</div>
