<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'meet-studio.ru',
        'brandUrl' => '/admin',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            // ['label' => 'Главная', 'url' => ['default/index']],
            ['label' => 'Товары', 'url' => ['product/index']],
            ['label' => 'Категории', 'url' => ['category/index']],
            ['label' => 'Заказы', 'url' => ['/admin/order/index']],
            ['label' => 'Страницы', 'url' => ['pages/index']],
            ['label' => 'Новости', 'url' => ['news/index']],
            ['label' => 'Пользователи', 
                'items' => [
                    ['label' => 'Подписчики', 'url' => ['subscribe/index']],
                    ['label' => 'Заявки на мероприятие', 'url' => ['event-register/index']],
                    ['label' => 'Профессионалы', 'url' => ['professional/index']],
                ]
            ],
            ['label' => 'Партнеры', 
                'items' => [
                    ['label' => 'MHliving', 'url' => ['mcategory/index']],
                    ['label' => 'Garda', 'url' => ['gcategory/index']]
                ]
            ],
            ['label' => 'Комнаты', 'url' => ['/room/default']],
            // ['label' => 'Валюты', 'url' => ['category/index']],
            [
                'label' => 'Настройки',
                'items' => [
                     ['label' => 'Настройки корзины', 'url' => ['/admin/cart-setting/update', 'id'=>1]],
                ],
            ],

            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
