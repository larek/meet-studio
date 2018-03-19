<?
use yii\widgets\ListView;
use app\components\TreeView;
$this->title = 'Мебель';
?>
<div class="row mt-3">
  <div class="col-md-12">
    <h1><?= $this->title?></h1>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="sideBlock">
      <?= Yii::$app->TreeView->run();?>
    </div>
  </div>
  <div class="col-md-9">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'row'],
        'itemOptions' => ['class' => 'col-md-4 mt-3'],
        'summaryOptions' => ['class' => 'col-md-12'],
        'itemView' => '_item',
    ]);?>
  </div>
</div>
