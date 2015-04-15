<?php

namespace vendor\premierssg\metronic\assets;

use yii\web\AssetBundle;

class MetronicAsset extends AssetBundle
{
    public $sourcePath = '@vendor/premierssg/metronic';
    public $css = [
    				'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
    				'assets/global/plugins/font-awesome/css/font-awesome.min.css',
    				'assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
    				'assets/global/plugins/bootstrap/css/bootstrap.min.css',
    				'assets/global/plugins/uniform/css/uniform.default.css',
    				'assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
    			];
    public $js = [
					'assets/global/plugins/jquery.min.js',
					'assets/global/plugins/jquery-migrate.min.js',
					'assets/global/plugins/jquery-ui/jquery-ui.min.js',
					'assets/global/plugins/bootstrap/js/bootstrap.min.js',
					'assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
					'assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
					'assets/global/plugins/jquery.blockui.min.js',
					'assets/global/plugins/jquery.cokie.min.js',
					'assets/global/plugins/uniform/jquery.uniform.min.js',
					'assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',					
			    ];
    public $depends = [
        			'vendor\premierssg\metronic\assets\MetronicAssetIE',    	
    ];
}
