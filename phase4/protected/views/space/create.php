<?php
$this->pageCaption='List SynergySpace';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List your space for rent';
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