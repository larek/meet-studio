<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $title;
?>
<div class="row">
	<div class="col-md-12">
		<h1><?= $title?></h1>
	</div>
</div>

<div class="row">
	<? foreach($model as $item):?>
		<div class="col-md-4">
		<div class="card">
		  <img class="card-img-top" src="<?= $item->image?>" class='img-fluid' alt="Card image cap">
		  <div class="card-body text-center">
		    <h3 class="card-title"><?= $item->title?></h3>
		    <a href="<?= $item->link?>" class="btn btn-dark">Подробнее</a>
		  </div>
		</div>
		</div>
	<? endforeach;?>
</div>