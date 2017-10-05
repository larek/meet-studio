<?
use yii\helpers\Html;
use yii\helpers\Url;
?>
	<div class="card clear-bg" onclick="window.location='<?= Url::to(['projects/view','id'=>$model->id]);?>'">
	  <img class="card-img-top" src="<?= $model->image?>" class='img-fluid' alt="Card image cap">
	  <div class="card-body text-center">
	    <h4 class="card-title"><?= $model->title?></h4>
	    <a href="<?= Url::to(['projects/view','id'=>$model->id])?>" class="btn btn-dark">Подробнее</a>
	  </div>
	</div>
