<?php

class DefaultController extends Controller
{   
	public $layout='new_layout';
	
	public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations
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
						'actions'=>array('index'),
						'users'=>array('admin'),
				),
				
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionView()
	{
		$this->render('view');
	}
}