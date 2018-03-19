<?
use yii\widgets\ListView;
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
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'row'],
        'itemOptions' => ['class' => 'col-md-4 mt-3'],
        'summaryOptions' => ['class' => 'col-md-12'],
        'itemView' => '_item',
    ]);?>
  </div>
</div>
