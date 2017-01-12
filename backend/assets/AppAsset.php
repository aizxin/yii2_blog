<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "media/css/bootstrap.min.css",
        "media/css/bootstrap-responsive.min.css",
	    "media/css/font-awesome.min.css",
	    "media/css/style-metro.css",
	    "media/css/style.css",
	    "media/css/style-responsive.css",
	    "media/css/default.css",
	    "media/css/uniform.default.css",
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
