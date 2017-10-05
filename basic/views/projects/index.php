<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проекты';
?>
<div class="row">
	<div class="col-md-12">
		<h1><?= $this->title?></h1>
	</div>
</div>

	<?= ListView::widget([
	    'dataProvider' => $dataProvider,
	    'itemView' => '_item',
	    'summary' => false,
	    'options' => ['class' => 'row'],
	    'itemOptions' => ['class' => 'col-md-4 grid-item']
	]);?>
