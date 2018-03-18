<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $title;
?>
<div class="row mt-3">
	<div class="col-md-12">
		<h1><?= $title?></h1>
	</div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="sideBlock">
      <ul>
        <li>Гостиная
          <ul>
            <li><a href=''>Приставные столики</a></li>
            <li><a href=''>Консоли</a></li>
            <li><a href=''>Кофейные столики</a></li>
            <li><a href=''>Акцентные кресла</a></li>
            <li><a href=''>Банкетка, пуф</a></li>
            <li><a href=''>Игровые столы</a></li>
            <li><a href=''>ТВ рамы</a></li>
            <li><a href=''>ТВ тумбы</a></li>
          </ul>
        </li>
        <li>Спальня
          <ul>
            <li><a href=''>Кровати</a></li>
            <li><a href=''>Прикроватные тумбы</a></li>
            <li><a href=''>Комоды</a></li>
            <li><a href=''>Изголовье кровати</a></li>
            <li><a href=''>Шкафы</a></li>
            <li><a href=''>Банкетки</a></li>
            <li><a href=''>Ширмы</a></li>
          </ul>
        </li>
        <li>Обеденная группа
          <ul>
            <li><a href=''>Столы</a></li>
            <li><a href=''>Стулья</a></li>
            <li><a href=''>Барные стулья</a></li>
            <li><a href=''>Винные шкафы</a></li>
          </ul>
        </li>
        <li>Офисная мебель
          <ul>
            <li><a href=''>Письменные столы</a></li>
            <li><a href=''>Книжные шкафы</a></li>
            <li><a href=''>Стулья для переговорных</a></li>
          </ul>
        <li>Декор
          <ul>
            <li><a href=''>Зеркала</a></li>
            <li><a href=''>Рамки для фото</a></li>
            <li><a href=''>Картины</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-md-9">    
    <div class="row">
            <? foreach($model as $item):?>
                    <div class="col-md-4 grid-item" onclick="window.location='<?= $item->link?>'">
                    <div class="card clear-bg">
                      <img class="card-img-top" src="<?= $item->image?>" class='img-fluid' alt="Card image cap">
                      <div class="card-body text-center">
                        <h4 class="card-title"><?= $item->title?></h4>
                        <a href="<?= $item->link?>" class="btn btn-dark">Подробнее</a>
                      </div>
                    </div>
                    </div>
            <? endforeach;?>
    </div>
  </div>
</div>
