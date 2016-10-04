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
        // Basic Styles
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        // SmartAdmin Styles : Caution! DO NOT change the order
        'css/smartadmin-production-plugins.min.css',
        'css/smartadmin-production.min.css',
        'css/smartadmin-skins.min.css',
        // SmartAdmin RTL Support
        'css/smartadmin-rtl.min.css',
        /* We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> */

        // Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp
        'css/demo.min.css',
        // #GOOGLE FONT
        'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $js = [
        'js/libs/jquery-ui-1.10.3.min.js',
        'js/app.config.js',
        'js/plugin/jquery-touch/jquery.ui.touch-punch.min.js',
        'js/bootstrap/bootstrap.min.js',
        'js/notification/SmartNotification.min.js',
        'js/smartwidgets/jarvis.widget.min.js',
        'js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js',
        'js/plugin/sparkline/jquery.sparkline.min.js',
        'js/plugin/jquery-validate/jquery.validate.min.js',
        'js/plugin/masked-input/jquery.maskedinput.min.js',
        'js/plugin/select2/select2.min.js',
        'js/plugin/bootstrap-slider/bootstrap-slider.min.js',
        'js/plugin/msie-fix/jquery.mb.browser.min.js',
        'js/plugin/fastclick/fastclick.min.js',
        'js/demo.min.js',
        'js/app.min.js',
        'js/speech/voicecommand.min.js',
        'js/smart-chat-ui/smart.chat.ui.min.js',
        'js/smart-chat-ui/smart.chat.manager.min.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
