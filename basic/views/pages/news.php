<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = $model->seo_title;
?>

<div class="clear"></div>
<section class="mainwrapper clearfix">
<h1><?= $model->title ?></h1>

<div class="col-sm-6 col-md-6">
<div class="alert-message alert-message-danger">
<h4>Акция</h4>
	<p>
		При заказе дизайн-проекта до 3 сентября, скидка на мебель <strong>15%</strong>, на 3д панели и обои <strong>10%</strong>, плитка и сантехника <strong>5%</strong>
	</p>
</div>
</div>
<?= $model->content;?>
</section>
