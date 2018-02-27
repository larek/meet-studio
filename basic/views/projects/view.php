<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = $model->title;
?>
<div class="row">
  <div class="col-md-12 mt-3">
    <h1><?= $model->title;?></h1>
  </div>
</div>
<div class="row">
  <?
    foreach($model->images as $item){
      echo "<div class='col-md-3 mt-3'>";
      echo Html::beginTag('a', ['href' => '/uploads/1000px/'.$item->img, 'data-fancybox' => 'group']);
      echo Html::img("/uploads/240x180/".$item->img, ['oncontextmenu' => 'return false', 'class' => 'img-fluid']);
      echo Html::endTag('a');
      echo "</div>";
    }
  ?>
</div>
