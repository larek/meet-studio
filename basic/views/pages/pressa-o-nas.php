<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = $model->seo_title;

?>

<section class="mainwrapper clearfix">
<h1><?= $model->title ?></h1>



<?= $model->content;?>
<br><br>
<iframe width="100%" height="515" src="https://www.youtube.com/embed/cTOz89Ho14w" frameborder="0" allowfullscreen></iframe>
</section>
