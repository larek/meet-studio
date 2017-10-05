<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Финиши';
?>
<div class="row">
	<div class="col-md-12">
		<h1>Финиши</h1>
	</div>
</div>

<div class="row">

	<div class="col-md-4 grid-item" onclick="window.location='/decor/2'">
		<div class="card clear-bg">
		  <img class="card-img-top" src="/images/decor/2/meet-studio-decor-2-thumb.jpg" class='img-fluid' alt="Card image cap">
		  <div class="card-body text-center">
		    <h4 class="card-title">Кожа</h4>
		    <a href="/decor/2" class="btn btn-dark">Подробнее</a>
		  </div>
		</div>
	</div>

	<div class="col-md-4 grid-item" onclick="window.location='/decor/3'">
		<div class="card clear-bg">
		  <img class="card-img-top" src="/images/decor/3/BARBADOS/9-2274-010-article-ratio1.jpg" class='img-fluid' alt="Card image cap">
		  <div class="card-body text-center">
		    <h4 class="card-title">Ткань</h4>
		    <a href="/decor/3" class="btn btn-dark">Подробнее</a>
		  </div>
		</div>
	</div>

</div>