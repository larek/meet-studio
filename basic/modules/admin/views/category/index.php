<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\admin\models\CategorySearch $searchModel
 */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?
        function get_tree($tree, $pid)
    {
        $html = '';
     
        foreach ($tree as $row)
        {
            if ($row['pid'] == $pid)
            {
                $html .= '<li>' . "\n";
                $html .= '    ' . $row['name'] . "\n";
                $html .= '    ' . get_tree($tree, $row['id']);
                $html .= '</li>' . "\n";
            }
        }
     
        return $html ? '<ul class="tree">' . $html . '</ul>' . "\n" : '';
    }
    ?>
    
        <?= get_tree($categoryArray,0);?>
    


</div>
