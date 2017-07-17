<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Category;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Category $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?
    
    if(!$model->isNewRecord){
        $modelCategory = Category::find()->andWhere(['pid' => 0])->andWhere('id!='.$model->id)->all();
    }else{
        $modelCategory = Category::find()->andWhere(['pid' => 0])->all();
    }
    $dropDownListItems = ArrayHelper::map($modelCategory,'id','title');
    $dropDownListItems[0] = 'Категория верхнего уровня';
    ksort($dropDownListItems);
   
    ?>

    <?= $form->field($model, 'pid')->dropDownList(
        [
          $dropDownListItems
        ]
    ); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'order_id')->textInput() ?>

    <?= $form->field($model, 'active')->checkbox() ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
