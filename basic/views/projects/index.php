<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проекты';
?>

<section class="mainwrapper clearfix">
    <div class="clear" style="margin-bottom:30px;"></div>
<section id="projects">

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_item',
    'summary' => false,
]);?>
	

			<div class="clear"></div>
		</section>
</section>