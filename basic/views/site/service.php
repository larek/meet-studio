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
		<img width="300" height="200" oncontextmenu="return false;" src="/images/meet-stars-5.jpg" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">Дизайн проект 5 звезд</div>
</div>
<div class="imageblock" onclick="window.location = '/service/4'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/meet-stars-4.jpg" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">Дизайн проект 4 звезды</div>
</div>
	

			<div class="clear"></div>
		</section>
</section>