<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = $model->seo_title;
?>

<div class="clear"></div>
<section class="mainwrapper clearfix">
<h1><?= $model->title ?></h1>
	

<?= $model->content;?>
</section>