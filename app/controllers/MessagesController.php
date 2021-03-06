<?php
use \yii\web\Controller;
use \yii\web\Pagination;
use \yii\base\HttpException;

use app\models\Messages;

class MessagesController extends Controller
{
	public $layout='column2';

	/**
	* @var string the default command action.
	*/
	public $defaultAction = 'index';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	public function behaviors() {
		return array(
			'AccessControl' => array(
				'class' => '\yii\web\AccessControl',
				'rules' => array(
					array(
						'allow'=>true,
				        'actions'=>array('index', 'view'),
						'roles'=>array('?')
		            ),
					array(
						'allow'=>true,
				        'roles'=>array('@'),
					),  
					array(
						'allow'=>false,  // deny all users
					),
				)
			)
		);
	}

	public function actionView($id='')
	{
		$model=$this->loadModel($id);
		echo $this->render('view',array(
			'model'=>$model,			
		));
	}

	public function actionCreate()
	{
		$this->layout = 'column1';
		$model=new Messages();
		if ($this->populate($_POST, $model) && $model->save()) {
			Yii::$app->response->redirect(array('view','id'=>$model->id));
		}

		echo $this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if ($this->populate($_POST, $model) && $model->save()) {
			Yii::$app->response->redirect(array('view','id'=>$model->id));
		}

		echo $this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionDelete($id)
	{
		// we only allow deletion via POST request
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		Yii::$app->response->redirect(array('index'));
	}

	public function actionIndex($tag='')
	{
		$query = Messages::find()
			->orderBy('update_time DESC');

		$countQuery = clone $query;
		$pagination = new Pagination($countQuery->count());

		$models = $query->offset($pagination->offset)
			->limit($pagination->limit)
			->with('sender', 'reciever')
			->all();

		echo $this->render('index', array(
			'models' => $models,
			'pagination' => $pagination,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$query = Messages::find()->all();

		$countQuery = clone $query;
		$pagination = new Pagination($countQuery->count());
		
		$models = $query->offset($pagination->offset)
				->limit($pagination->limit)
				->all();

		echo $this->render('admin', array(
				'models' => $models,
				'pagination' => $pagination,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel($id='')
	{
		if($this->_model===null)
		{
			if(!empty($id))
			{
				$this->_model=Messages::find($id);				
			}
			if($this->_model===null)
				throw new \yii\base\HttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

}
