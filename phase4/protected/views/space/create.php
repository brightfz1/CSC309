<?php
$this->pageCaption='Create Space';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new space';
$this->breadcrumbs=array(
	'Spaces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Spaces', 'url'=>array('index')),
	array('label'=>'Manage Spaces', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>