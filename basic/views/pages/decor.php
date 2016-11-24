<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = $model->seo_title;

?>
<div id="main-nav-sub">
		<div class="menu-prime-sub-wrap clearfix">
			<div class="menu-education-container">
        <ul id="menu-education" class="menu-prime-sub longer">
					<li class="menu-item"><?= Html::a('3D-панели',['pages/view', 'id' => '3Dpanels'])?></li>
					<li class="menu-item"><?= Html::a('Обои',['pages/view', 'id' => 'oboi'])?></li>
          <li class="menu-item"><a href="#">Аксессуары</a></li>
        </ul>
      </div>
    </div>
	</div>
<div class="clear"></div>
<section class="mainwrapper clearfix">
<h1><?= $model->title ?></h1>

<div class="row">
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="/uploads/240x180/fa59cf21c27ed1f2de21cf808c7c9e8d.jpg" alt="...">
      <div class="caption">
        <h3>3d-панели</h3>
        <?= Html::a('Подробнее',['pages/view', 'id' => '3Dpanels'],['class' => 'btn btn-default'])?></p>
      </div>
    </div>
  </div>
	<div class="col-sm-3 col-md-3">
		<div class="thumbnail">
			<img src="/uploads/240x180/d52c19eeead1ea05f6c17797d63fed98.jpg" alt="...">
			<div class="caption">
				<h3>Обои</h3>
				<?= Html::a('Подробнее',['pages/view', 'id' => 'oboi'],['class' => 'btn btn-default'])?></p>
			</div>
		</div>
	</div>


</div>

<?= $model->content;?>

</section>
