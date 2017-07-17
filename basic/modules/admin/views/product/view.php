<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Product $model
 */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
        
            'id',
             [
             'label' => 'Категория',
             'value' => $model->category->title,
             ],   
            'sku',
            'vendor',
            'title',
            'quantity',
            'price',
            'cur',
            'description',
            'size',
            'sale',
            'way',
            'onfactory',
            'active',
            'url',
            ['label' => 'Длина (Ширина)', 'value' => $model->property->width],
            ['label' => 'Глубина', 'value' => $model->property->depth],
            ['label' => 'Высота', 'value' => $model->property->height],
            ['label' => 'Диаметр', 'value' => $model->property->diameter],
            ['label' => 'Абажур', 'value' => $model->property->shade],
            ['label' => 'Тип цоколя', 'value' => $model->property->plinth],
            ['label' => 'Мощность', 'value' => $model->property->power]
        ],
    ]) ?>

    <?
        foreach($model->images as $item){
            echo Html::img('/uploads/300x200/'.$item->image);
        }
    ?>

</div>
