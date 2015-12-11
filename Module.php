<?php

namespace shadoq\Yii2LightTheme;

use Yii;

class Module extends \yii\base\Module{

	public $controllerNamespace = 'shadoq\Yii2LightTheme\controllers';
	public $layout = '@app/modules/Yii2LightTheme/views/layouts/main.php';

	public function init(){
		parent::init();
		Yii::$app->assetManager->forceCopy = true;
	}
}
