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
	<meta name="yandex-verification" content="bf42f3160d0f5000" />
	<meta name="google-site-verification" content="i2UHaZtzSSdIqoNxTXjL1B_DlBO4dOSJ2Yilnu2g5As" />

    <meta charset="<?= Yii::$app->charset ?>">
    <!-- <meta name="viewport" content="width=1200px, initial-scale=1"> -->
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
           <li><a href="/furniture">Мебель</a></li>
           <li><a href="/decor">Декор</a></li>
           <li><?= Html::a('Интерьер',['projects/index'],['class' => 'dropdown','id'=>'1']);?></li>
           <li><a href="/service">Услуги</a></li>
           <li><a href="/real-project">Реализованные проекты</a></li>
           <li><a href="#">Новости</a></li>
           <li><?= Html::a('Контакты',['site/contact'])?></li>
           
		</ul>

		<div class="nav-dropdown">
		</div>
    </div>

	<div class="clear"></div>
</div>

<div class="container-custom">
<?= $content?>
</div>
<div class="footer">
	<div class="footer-content">
		<div class="footer-inner-link" style='display:none'>
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

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'jNwgRwQbQ0';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36439989-4', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45113835 = new Ya.Metrika({
                    id:45113835,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45113835" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
