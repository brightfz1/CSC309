<?php

class DefaultController extends Controller
{   
	public $layout='new_layout';
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionView()
	{
		$this->render('view');
	}
}