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

    		
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>


<div class="header" style="margin-top: 10px !important;">
	<div class="circle1"></div>
	<div class="circle2"></div>
	<div class="circle3"></div>
	<div class="logo">
		<a href="/">
			<img id="logo" src="/images/logo.png" alt="BRABBU logo" style="margin-top: 14px;">
		</a>
	</div>
	
    <div class="nav">
    	<ul>
           <li><a href="/" style="color:#DD9B28;">Главная</a></li>
           <li><a href="#">Мебель</a></li>
           <li><a href="#">Декор</a></li>
           <li><a href="projects">Интерьер</a></li>
           <li><a href="#">Услуги</a></li>
           <li><a href="#">Наша философия</a></li>
           <li><a href="#">Новости</a></li>
           <li><a href="#">Контакты</a></li>
           
		</ul>
    </div>

	<div class="clear"></div>
</div>

<style type="text/css">
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
