<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = $model->title;
?>
<section class="mainwrapper clearfix">

		<div id="singlepost" class="clearfix">

			<h1><?= $model->title; ?></h1>

		<div id="maincontent">

			<?
				foreach($model->images as $img){
				 echo Html::img("/uploads/1000px/".$img->img,['oncontextmenu' => 'return false']);
				 echo "<br><br>";
				}
			?>
            <?= $model->description;?>
		</div>

</section>
