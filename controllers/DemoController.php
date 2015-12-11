<?php

namespace shadoq\Yii2LightTheme\controllers;

use yii\web\Controller;

class DemoController extends Controller{

	public function actionLoremlipsum(){
		return $this->render('/demo/loremlipsum');
	}

	public function actionGrid(){
		return $this->render('/demo/grid');
	}

	public function actionCss(){
		return $this->render('/demo/css');
	}

	public function actionTable(){
		return $this->render('/demo/table');
	}

	public function actionForms(){
		return $this->render('/demo/forms');
	}
	public function actionFormsIcon(){
		return $this->render('/demo/forms_icon');
	}
	public function actionButtons(){
		return $this->render('/demo/buttons');
	}
	public function actionGlyphicons(){
		return $this->render('/demo/glyphicons');
	}

}
