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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    		
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="container">
	<div class="circle1"></div>
	<div class="circle2"></div>
	<div class="circle3"></div>

    <div class="masthead">
    		<div class="row" style='margin-bottom: 10px'>
        <div class="col-4 d-md-none d-lg-none">
            <a href="/">
              <img id="logo" src="/images/logo.svg" class='img-fluid' />
            </a>  
        </div>
        <div class="col-8 text-right d-md-none d-lg-none">
          <span class="phoneHeader">+7-950-192-12-34</span>
        </div>
				<div class="col-md-6 d-none d-md-block">
					<div class="logo">
						<a href="/">
							<img id="logo" src="/images/logo.svg" />
						</a>
					</div>
				</div>
				<div class="col-md-6 text-right d-none d-md-block">
					<span class='phoneHeader'>+7-831-284-40-24</span>
					<br>
					<span class='phoneHeader'>+7-905-192-12-34</span>
					<br>
					<!-- Button trigger modal -->
						<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#callBack">
						  Получить консультацию
						</button>
				</div>
				</div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample08" style="">
        <ul class="navbar-nav">
        		<li class='nav-item'><a href="/" class='nav-link' style="color:#DD9B28;">Главная</a></li>
           <li class='nav-item'><a href="/furniture" class='nav-link' >Мебель</a></li>
           <li class='nav-item'><a href="/decor" class='nav-link' >Декор</a></li>
           <li class='nav-item'><?= Html::a('Интерьер',['projects/index'],['class' => 'nav-link','id'=>'1']);?></li>
           <li class='nav-item'><a href="/service" class='nav-link' >Услуги</a></li>
           <li class='nav-item'><a href="/real-project" class='nav-link' >Реализованные проекты</a></li>
           <li class='nav-item'><a href="#" class='nav-link' >Новости</a></li>
           <li class='nav-item'><?= Html::a('Контакты',['site/contact'],['class' => 'nav-link'])?></li>
        </ul>
      </div>
    </nav>
    </div>

			<?= $content?>
</div> <!-- /container -->

<br>

<footer class="footer">
  <div class="container">
    <p class='white'> &copy; Meet Studio | Все права защищены. </p>
  </div>
</footer>

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

<!-- Modal -->
<div class="modal fade" id="callBack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-sub-header">
      	<p>Мы с радостью проконсультируем вас о стоимости и сроках выполнения работ в сфере дизайна интерьера, производства авторской мебели и декорирования. Сообщите нам свои контактные данные для обратной связи и мы свяжемся с вами в ближайшее время.</p>
      </div>
      <div class="modal-body">
        <div class="form-group formGroupCallbackName">
			<label for="exampleInputEmail1">Как можно к вам обращаться?</label>
			<input type="text" class="form-control callbackName" placeholder="Ваше имя">
		</div>
		<div class="form-group formGroupCallbackContact">
			<label for="exampleInputEmail1">Как мы можем связаться с вами?</label>
			<input type="text" class="form-control callbackContact" placeholder="Номер телефона или email">
		</div>
		<div class="form-group formGroupCallbackMessage">
			<label for="exampleInputEmail1">По какому вопросу вы бы хотели проконсультироваться?</label>
			<textarea type="text" class="form-control callbackMessage" rows='3' placeholder="Опишите, пожалуйста, что вас интересует и тогда мы более точно сможем подготовить необходимую информацию перед тем как связаться с вами"></textarea>
		</div>
		<div class="noticeBlock"></div>
      </div>
      <div class="modal-footer">
        <span class="btn btn-dark btn-callBack">Отправить</span>
      </div>
    </div>
  </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
