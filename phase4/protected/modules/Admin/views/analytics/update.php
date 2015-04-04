<?php
$this->pageCaption='Update Analytics '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Analytics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Analytics', 'url'=>array('index')),
	array('label'=>'Create Analytics', 'url'=>array('create')),
	array('label'=>'View Analytics', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Analytics', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>