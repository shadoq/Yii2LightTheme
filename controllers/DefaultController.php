<?php

namespace shadoq\Yii2LightTheme\controllers;

use yii\web\Controller;

class DefaultController extends Controller{
	public function actionIndex(){
		return $this->render('index');
	}

	public function actionIndex2(){
		return $this->render('index2');
	}

	public function actionWidget(){
		return $this->render('/yii/widget');
	}

	public function actionBackendGrid(){
		return $this->render('/yii/backend-grid');
	}

	public function actionBackendInfo(){
		return $this->render('/yii/backend-info');
	}

	public function actionBackendForm(){
		return $this->render('/yii/backend-form');
	}
}
