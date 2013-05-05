<?php

use yii\base\HttpException;
use yii\web\Controller;
use app\models\User;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
	public function actionIndex()
	{
		$data = User::find()->all();
		echo $this->render('index',array('data'=>$data));
	}

	public function actionLogin()
	{
		$model = new LoginForm();
		if ($this->populate($_POST, $model) && $model->login()) {
			Yii::$app->response->redirect(array('site/index'));
		} else {
			echo $this->render('login', array(
				'model' => $model,
			));
		}
	}

	public function actionLogout()
	{
		Yii::$app->getUser()->logout();
		Yii::$app->getResponse()->redirect(array('site/index'));
	}

	public function actionContact()
	{
		$model = new ContactForm;
		if ($this->populate($_POST, $model) && $model->contact(Yii::$app->params['adminEmail'])) {
			Yii::$app->session->setFlash('contactFormSubmitted');
			Yii::$app->response->refresh();
		} else {
			echo $this->render('contact', array(
				'model' => $model,
			));
		}
	}

	public function actionAbout()
	{
		echo $this->render('about');
	}
}