<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace vendor\premierssg\metronic\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MetronicAsset extends AssetBundle
{
    public $sourcePath = '@vendor/premierssg/metronic';
    public $css = ['http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
    				'assets/global/plugins/font-awesome/css/font-awesome.min.css',
    				'assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
    				'assets/global/plugins/bootstrap/css/bootstrap.min.css',
    				'assets/global/plugins/uniform/css/uniform.default.css',
    				'assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
    			];
    public $js = [
					// 'assets/global/plugins/jquery-1.11.0.min.js',
					'assets/global/plugins/jquery-migrate-1.2.1.min.js',
					'assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
					'assets/global/plugins/bootstrap/js/bootstrap.min.js',
					'assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
					'assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
					'assets/global/plugins/jquery.blockui.min.js',
					'assets/global/plugins/jquery.cokie.min.js',
					'assets/global/plugins/uniform/jquery.uniform.min.js',
					'assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
					'assets/global/scripts/metronic.js',
					'assets/admin/layout/scripts/layout.js',
					'assets/admin/layout/scripts/quick-sidebar.js',
					'assets/global/scripts/app.js',
			    ];
    public $depends = [
        'vendor\premierssg\metronic\assets\MetronicAssetIE',    	
    ];
}
