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
class MetronicAssetIE extends AssetBundle
{
    public $sourcePath = '@vendor/metronic';
	public $jsOptions = ['condition' => 'lt IE 9'];
    public $css = [];
    public $js = [
				    "assets/plugins/respond.min.js",
					"assets/plugins/excanvas.min.js",
    ];
    public $depends = [];
}
