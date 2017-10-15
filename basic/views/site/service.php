<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Услуги';
?>
<div class="row">
	<div class="col-md-12">
		<h1>Услуги</h1>
	</div>
</div>
<div class="row">
	<!-- Grid Item -->
	<div class="col-md-4 grid-item" onclick="window.location='/service/5'">
		<div class="card clear-bg">
		  <img class="card-img-top" src="/images/meet-studio-stars-5.png" class='img-fluid' alt="Card image cap">
		  <div class="card-body text-center">
		    <h4 class="card-title">Дизайн проект 5 звезд</h4>
		    <div class="service-price"><span class='service-price'>1600 р/м2</span></div>
		    <a href="/service/5" class="btn btn-dark">Подробнее</a>
		  </div>
		</div>
	</div>
	<!-- End Grid Item -->
	<!-- Grid Item -->
	<div class="col-md-4 grid-item" onclick="window.location='/service/4'">
		<div class="card clear-bg">
		  <img class="card-img-top" src="/images/meet-studio-stars-4.png" class='img-fluid' alt="Card image cap">
		  <div class="card-body text-center">
		    <h4 class="card-title">Дизайн проект 4 звезды</h4>
		    <div class='service-price'><span class='service-price'>1200 р/м2</span></div>
		    <a href="/service/4" class="btn btn-dark">Подробнее</a>
		  </div>
		</div>
	</div>
	<!-- End Grid Item -->
</div>