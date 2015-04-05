<?php
$this->pageCaption='Update your SynergySpace: '.$model->name;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Spaces'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Spaces', 'url'=>array('index')),
	array('label'=>'Create Space', 'url'=>array('create')),
	array('label'=>'View Space', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Spaces', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>