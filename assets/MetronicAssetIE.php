<?php

namespace vendor\premierssg\metronic\assets;

use yii\web\AssetBundle;

class MetronicAssetIE extends AssetBundle
{
    public $sourcePath = '@vendor/premierssg/metronic';
	public $jsOptions = ['condition' => 'lt IE 9'];
    public $css = [];
    public $js = [
    		"assets/global/plugins/respond.min.js",
			"assets/global/plugins/excanvas.min.js",
    ];
    public $depends = [];
}
