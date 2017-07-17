<?
use yii\helpers\Html;
foreach($model->images as $item){
    echo "<div class='col-md-3 text-center'>";
    echo "<div class='thumbnail'>";
    echo Html::img('/uploads/300x200/'.$item->image,['class' => 'img-responsive']);
    echo Html::tag('span','Удалить',['class' => 'btn btn-xs btn-default removeImg','id' => $item->id, 'data-pid' => $model->id]);
    echo $item->main == 0 ? Html::tag('span','Главная',['class' => 'btn btn-xs btn-default mainImg','id' => $item->id, 'data-pid' => $model->id]) : Html::tag('span','Главная',['class' => 'btn btn-xs btn-primary']);
    echo "</div>";
    echo "</div>";
}
?>