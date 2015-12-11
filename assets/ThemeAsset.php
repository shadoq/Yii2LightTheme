<?php

namespace shadoq\Yii2LightTheme\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle{

	public $css = [
	   'css/layout.css',
	   'css/skin.css',
	];
	public $js = [
	   'js/theme_app.js',
	];
	public $depends = [
	   'yii\web\YiiAsset',
	   'yii\bootstrap\BootstrapAsset',
	   'yii\bootstrap\BootstrapPluginAsset',
	   'yii\web\JqueryAsset',
	];

	public function init(){
		$this->sourcePath = __DIR__;
		parent::init();
	}
}
