<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Category;
use app\modules\admin\models\Cur;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Product $model
 * @var yii\widgets\ActiveForm $form
 */
$this->registerJsFile(
    '/public/js/product-admin.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="col-md-6">
    <?= $form->field($model, 'title')->textInput(['maxlength' => 250]) ?>
    <?
    $dropDownListItems = ArrayHelper::map(Category::find()->orderBy(['title' => SORT_ASC])->all(),'id','title');
    echo $form->field($model, 'category_id')->dropDownList([$dropDownListItems]); 
    ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'price_pro')->textInput() ?>

    <? 
    $dropDownListItems = ArrayHelper::map(Cur::find()->all(),'id','title');
    echo $form->field($model, 'cur')->dropDownList([$dropDownListItems]); 
    ?>

    <?= $form->field($model, 'sku')->textInput(['maxlength' => 250]) ?>

        <?= $form->field($model, 'vendor')->textInput(['maxlength' => 250]) ?>

        <?= $form->field($model, 'quantity')->textInput(['maxlength' => 250]) ?>

        <?= $form->field($model, 'sale')->textInput(['maxlength' => 250]) ?>

        <?= $form->field($model, 'way')->checkbox() ?>

        <?= $form->field($model, 'active')->checkbox() ?> 

        <?= $form->field($model, 'available')->checkbox() ?> 

        <?= $form->field($model, 'new')->checkbox() ?> 

        <?= $form->field($model, 'onfactory')->checkbox() ?> 

        

    </div>

    <div class="col-md-6">
        
        <?= $form->field($property, 'width')->textInput();?>
        <?= $form->field($property, 'depth')->textInput();?>
        <?= $form->field($property, 'height')->textInput();?>
        <?= $form->field($property, 'diameter')->textInput();?>
        <?= $form->field($property, 'shade')->textInput();?>
        <?= $form->field($property, 'plinth')->textInput();?>
        <?= $form->field($property, 'power')->textInput();?>

        <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>
        <?= $form->field($model, 'size')->textarea(['rows' => 4]) ?>

        <div class='panel panel-default'>
            <div class="panel-heading">
                <?= Html::fileInput('image[]','',['multiple' => true]);?>
            </div>
            <div class="panel-body photo-wrapper" id='<?= $model->id?>'>
                <?
                // foreach($model->images as $item){
                //     echo "<div class='col-md-3 text-center'>";
                //     echo "<div class='thumbnail'>";
                //     echo Html::img('/uploads/300x200/'.$item->image,['class' => 'img-responsive']);
                //     echo Html::tag('span','Удалить',['class' => 'btn btn-xs btn-default removeImg','id' => $item->id, 'data-pid' => $model->id]);
                //     echo $item->main == 0 ? Html::tag('span','Главная',['class' => 'btn btn-xs btn-default mainImg','id' => $item->id, 'data-pid' => $model->id]) : Html::tag('span','Главная',['class' => 'btn btn-xs btn-primary']);
                //     echo "</div>";
                //     echo "</div>";
                // }
                ?>
            
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    </div>
    


    


   

    <?php ActiveForm::end(); ?>

</div>
