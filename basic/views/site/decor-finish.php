<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Финиши';
?>
<h1>Финиши</h1>
<section class="mainwrapper clearfix">
    <div class="clear" style="margin-bottom:30px;"></div>
<section id="projects">

<div class="imageblock" onclick="window.location = '/decor/2'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/decor/2/meet-studio-decor-2-thumb.jpg" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">Кожа</div>
</div>
<div class="imageblock" onclick="window.location = '/decor/3'">
	<div class="singleimage">
		<img width="300" height="200" oncontextmenu="return false;" src="/images/decor/3/BARBADOS/9-2274-010-article-ratio1.jpg" class="attachment-gallery wp-post-image">
	</div>
	<div class="afterpicture">Ткань</div>
</div>


			<div class="clear"></div>
		</section>
</section>