<?
use yii\helpers\Html;
use yii\helpers\Url;
?>
	<div class="imageblock" onclick="window.location = '<?= Url::to(['projects/view','id'=>$model->id])?>'">
		<div class="singleimage">
						<img width="300" height="200" oncontextmenu="return false;" src="<?= $model->image;?>" class="attachment-gallery wp-post-image" alt="Проекты для девелоперов — жилые и коммерческие объекты">	
			
		</div>
		<div class="afterpicture "><?= $model->title; ?></div>
	</div>
