<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace vendor\metronic\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MetronicAsset extends AssetBundle
{
    public $sourcePath = '@vendor/premierssg/metronic';
    public $css = ['assets/plugins/font-awesome/css/font-awesome.min.css',
  					'assets/plugins/bootstrap/css/bootstrap.min.css',
  					'assets/plugins/uniform/css/uniform.default.css',
  					'assets/css/style-metronic.css',
  					'assets/css/style.css',
  					'assets/css/style-responsive.css',
  					'assets/css/plugins.css'
    			];
    public $js = [
				    "assets/plugins/jquery-1.10.2.min.js",
					"assets/plugins/jquery-migrate-1.2.1.min.js",
					"assets/plugins/bootstrap/js/bootstrap.min.js",
					"assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js",
					"assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js",
					"assets/plugins/jquery.blockui.min.js",
					"assets/plugins/jquery.cookie.min.js",
					"assets/plugins/uniform/jquery.uniform.min.js"
    ];
    public $depends = [
        'vendor\premierssg\metronic\assets\MetronicAssetIE',    	
    ];
}
