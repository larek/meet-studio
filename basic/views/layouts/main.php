<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/d-e-s-i-g-n.ru\/wp-includes\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>


<div class="header" style="margin-top: 10px !important;">
	<div class="logo">
		<a href="/">
			<img id="logo" src="/images/logo.png" alt="BRABBU logo" style="margin-top: 14px;">
		</a>
	</div>
	
    <div class="nav">
    	<ul>
           <li><a href="/" style="color:#DD9B28;">Главная</a></li>
           <li><a href="/projects">Интерьеры</a></li>
           <li><a href="#">О нас</a></li>
           <li><a href="#">Новости</a></li>
           <li><a href="#">Контакты</a></li>
           
		</ul>
    </div>

	<div class="clear"></div>
</div><style type="text/css">
	.art-area {
		margin: 20px 0;
	}
	.vertical-slide_stamp {
		-webkit-filter: invert(100%); 
		filter: invert(100%);

	}
	.flexslider{
margin: 0 !important;
padding: 0 !important;
}
</style>
<div class="container">
<?= $content?>
</div>
<div class="footer">
	<div class="footer-content">
		<div class="footer-inner-link">
			<div class="footer-inner-link-title">
				<p>Полезная информация</p>
			</div>
			<div class="footer-inner-link-text">
		        <div class="column1">
		            <h3>Заголовок</h3>
		            <ul>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		               
		            </ul>
		            
		        </div>
		        <div class="column2">
		            <h3>Заголовок</h3>
		            <ul>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		               
		            </ul>
		        </div>
		        <div class="column3">
		            <h3>Заголовок</h3>
		            <ul>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		               
		            </ul>
		        </div>

		        <div class="column3">
		            <h3>Заголовок</h3>
		            <ul>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		               
		            </ul>
		        </div>

		        <div class="column3">
		            <h3>Заголовок</h3>
		            <ul>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		               
		            </ul>
		        </div>

		        <div class="column3">
		            <h3>Заголовок</h3>
		            <ul>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		                <li><a href="#">Ссылка</a></li>
		               
		            </ul>
		        </div>
			</div>
		</div>
        
        
        <div class="clear"></div>
	</div>
</div>
<div class="footer-bottom">
	<div class="footer-content">
		<p> &copy; Meet | Все права защищены. </p>
	</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
