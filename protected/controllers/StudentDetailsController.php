<?php

class StudentDetailsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new StudentDetails;

		$departments = Department::model()->findAll(array('order' => 'department_name'));
		$departments = CHtml::listData($departments, 'dept_id', 'department_name');

		$programs = Program::model()->findAll(array('order' => 'program_name'));
		$programs = CHtml::listData($programs, 'program_id', 'program_name');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StudentDetails']))
		{
			$model->attributes=$_POST['StudentDetails'];
			if($model->save()){
				$education = new Education;
				$education->student_id = $model->id;
				$education->save();
		
				// Set student_id for WorkExperience model
				$workExperience = new WorkExperience;
				$workExperience->student_id = $model->id;
				$workExperience->save();
		
				// Set student_id for Skills model
				$skills = new Skills;
				$skills->student_id = $model->id;
				$skills->save();
		
				// Set student_id for ExtraCurricular model
				$extraCurricular = new ExtraCurricular;
				$extraCurricular->student_id = $model->id;
				$extraCurricular->save();	

				$this->redirect(array('education/create', 'id' => $model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'departments' => $departments,
			'programs' => $programs,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StudentDetails']))
		{
			$model->attributes=$_POST['StudentDetails'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$education=Education::model()->findByPk($id+1)->delete();
		$skills=Skills::model()->findByPk($id)->delete();
		$workExperience=WorkExperience::model()->findByPk($id)->delete();
		$extraCurricular=ExtraCurricular::model()->findByPk($id)->delete();

		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('StudentDetails');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new StudentDetails('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['StudentDetails']))
			$model->attributes=$_GET['StudentDetails'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return StudentDetails the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=StudentDetails::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param StudentDetails $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='student-details-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
