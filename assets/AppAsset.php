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
        '/web/public/css/normalize.css',
        '/web/public/css/main.css',
        //'/web/public/css/bootstrap.min.css',
        '/web/public/css/animate.min.css',
        '/web/public/css/font-awesome.min.css',
        '/web/public/css/font/flaticon.css',
        '/web/public/css/owl.carousel.min.css',
        '/web/public/css/owl.theme.default.min.css',
        '/web/public/css/meanmenu.min.css',
        '/web/public/css/select2.min.css',
        '/web/public/vendor/noUiSlider/nouislider.min.css',
        '/web/public/style.css',
        //'web/css/site.css',
    ];
    public $js = [
        '/web/public/js/vendor/jquery-2.2.4.min.js',
        '/web/public/js/bootstrap.min.js',
        '/web/public/js/vendor/modernizr-2.8.3.min.js',
        '/web/public/js/owl.carousel.min.js',
        '/web/public/js/jquery.meanmenu.min.js',
        '/web/public/js/wow.min.js',
        '/web/public/js/plugins.js',
        '/web/public/lib/custom-slider/js/jquery.nivo.slider.js',
        '/web/public/lib/custom-slider/home.js',
        '/web/public/js/jquery.countdown.min.js',
        '/web/public/js/jquery.scrollUp.min.js',
        '/web/public/js/jquery.actual.min.js',
        '/web/public/vendor/noUiSlider/nouislider.min.js',
        '/web/public/js/isotope.pkgd.min.js',
        '/web/public/js/wNumb.js',
        '/web/public/js/jquery.accordion.js',
        '/web/public/js/jquery.cookie.js',
        '/web/public/js/cart.js',
        '/web/public/js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
