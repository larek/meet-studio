<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Услуги';
?>
<h1>Услуги</h1>
<section class="mainwrapper clearfix">
    <div class="clear" style="margin-bottom:30px;"></div>
<section id="projects">

<div class="imageblock" onclick="window.location = '/service/5'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/meet-studio-stars-5.png" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">
		<h4>Дизайн проект 5 звезд</h4>
		<span class='service-price'>1450 р/м2</span>
	</div>
</div>
<div class="imageblock" onclick="window.location = '/service/4'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/meet-studio-stars-4.png" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">
		<h4>Дизайн проект 4 звезды</h4>
		<div class='service-price'><span class='red-price'>650 р/м2</span> <del>1100 р/м2</del></div>
	</div>
</div>
	

			<div class="clear"></div>
		</section>
</section>