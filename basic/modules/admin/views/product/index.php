<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\admin\models\Category;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\admin\models\ProductSearch $searchModel
 */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs('
                            $(".available-checkbox").click(function(){
                                var id = $(this).attr("id");
                                var available = $(this).is(":checked");
                                $.get("/admin/product/updateavailable",{"id":id,"available":available}).done(function(data){
                                    console.log(data);
                                });
                            });
                        ');
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="row">
    <div class="col-md-3">
        <?//= Yii::$app->TreeViewAdmin->run();?>
    </div>
    <div class="col-md-9">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'format' => 'raw',
                'value' => function($data){
                    return Html::img($data->mainImage, ['style' => 'width:100px']);
                }
            ],
            [
                'attribute' => 'title',
                'format' => 'raw',
                'headerOptions' => ['style' => 'width:300px'],
                'value' => function($data){
                    return Html::a($data->title,['update','id' => $data->id]);
                }

            ],
            
            // [

            //     'attribute' => 'category_id',
            //     'headerOptions' => ['style' => 'width:200px'],
            //     'format' => 'raw',
            //     'value' => function($data){
            //         return $data->category->title;
            //     },
            //     'filter' => Html::activeDropDownList($searchModel, 'category_id', ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'title'),['class'=>'form-control','prompt' => 'Категория']),
            // ],
            // [
            // 'label' => 'Информация о товаре',
            // 'format' => 'raw',
            // 'value' => function($data){
            //         return "Артикул ". $data->sku."<br>".
            //                 "Производитель ". $data->vendor."<br>".
            //                 "Количество ". $data->quantity."<br>".
            //                 "Цена ". $data->price."<br>".
            //                 "Валюта ". $data->curency->title."<br>";

            //     }
            // ],
            'sku',
            'vendor',
            'quantity',
            // 'price',
            [
                'attribute' => 'price',
                'format' => 'raw',
                'value' => function($data){
                    return $data->price." ".$data->curency->title;
                }
            ],
            // 'description',
            'sale',
            'way',
            'active',
            [
                'attribute' => 'available',
                'format' => 'raw',
                'value' => function($data){
                    return Html::activeCheckbox($data, 'available', ['label' => 'На складе', 'class' => 'available-checkbox','id'=> $data->id]);
                    
                } 
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>

</div>
