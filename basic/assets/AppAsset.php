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
        'css/default.css?v=1.0.3',
        'css/normalize.css',
        // 'css/docs.css ',
        'css/parsley.css',
        'css/easing.css',
        'css/scrollToTop.css',
        'css/flexslider.css',
        'css/style-ready-to-ship.css',
        'css/site.css?v=1.0.6'
    ];
    public $js = [
        // 'js/affix.js',
        // 'js/jquery.flexslider.js',
        // 'js/demo.js',
        // 'js/jquery.mousewheel.js',
        // 'js/jquery-scrollToTop.js',
        // 'js/modernizr.js',
        // 'js/jquery.easing.js',
        // 'js/parsley.js',
        'js/site.js?v=1.0.2'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
