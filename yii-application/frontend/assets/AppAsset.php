<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/flexslider.css',
        'css/smoothbox.css',
        'css/style.css'
    ];
    public $js = [
        'js/bootstrap.js',
        'js/counterup.min.js',
        'jquery.flexisel.js',
        'jquery.flexslider.js',
        'smoothbox.jquery2.js',
        'waypoints.min.s'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}