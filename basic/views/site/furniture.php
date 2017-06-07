<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мебель';
?>
<h1>Мебель</h1>
<section class="mainwrapper clearfix">
    <div class="clear" style="margin-bottom:30px;"></div>
<section id="projects">

<div class="imageblock" onclick="window.location = '/furniture/1'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/furniture/1/meet-studio-thumb-furniture-1.png" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">Прикроватная тумба Classic</div>
</div>

<div class="imageblock" onclick="window.location = '/furniture/2'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/furniture/2/meet-studio-thumb-furniture-2.png" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">Прикроватная тумба</div>
</div>

<div class="imageblock" onclick="window.location = '/furniture/3'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/furniture/3/meet-studio-thumb-furniture-3.png" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">Банкетка</div>
</div>

<div class="imageblock" onclick="window.location = '/furniture/4'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/furniture/4/1.jpg" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">Вешалка для одежды</div>
</div>

			<div class="clear"></div>
		</section>
</section>