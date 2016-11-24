<?php
use yii\helpers\Html;
use app\components\Gallery;
/* @var $this yii\web\View */
$this->title = $model->seo_title;
?>

<div class="clear"></div>
<section class="mainwrapper clearfix">
<h1><?= $model->title ?></h1>
<?= $model->content;?>

<div class="col-md-12">
<h2>Консоль</h2>
<?= Gallery::widget(['galleryId' => 3]);?>
</div>

<div class="col-md-12">
<h2>Журнальный стол, диаметр 800мм, сталь и латунь</h2>
<?= Gallery::widget(['galleryId' => 4]);?>
</div>


<div class="col-md-12">
<h2>Обеденный стол</h2>
<?= Gallery::widget(['galleryId' => 5]);?>
</div>

</section>
