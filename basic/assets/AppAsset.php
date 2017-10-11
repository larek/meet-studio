<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/all.min.css?v=1.1.9',
        '/bower_components/fotorama/fotorama.css',
    ];
    public $js = [
        'http://getbootstrap.com/assets/js/vendor/popper.min.js',
        '/node_modules/bootstrap/dist/js/bootstrap.min.js',
        '/node_modules/fotorama/fotorama.js'

        // 'public/js/all-min.js?v=1.0.4',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapPluginAsset',
    ];
}
