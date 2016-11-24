<?php
use yii\helpers\Html;
use app\components\Gallery;
/* @var $this yii\web\View */
$this->title = $model->title;
?>
<div id="main-nav-sub">
		<div class="menu-prime-sub-wrap clearfix">
			<div class="menu-education-container">
        <ul id="menu-education" class="menu-prime-sub longer">
          <li class="menu-item current-menu-item"><?= Html::a('3D-панели',['pages/view', 'id' => '3Dpanels'])?></li>
          <li class="menu-item "><?= Html::a('Обои',['pages/view', 'id' => 'oboi'])?></li>
          <li class="menu-item"><a href="#">Аксессуары</a></li>
        </ul>
      </div>
    </div>
	</div>
<div class="clear"></div>
<section class="mainwrapper clearfix">
<h1><?= $model->title ?></h1>
<?= $model->content;?>

<?= Gallery::widget(['galleryId' => 1]);?>
</section>
