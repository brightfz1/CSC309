<?php
$this->pageCaption='Create SpaceRequest';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new spacerequest';
$this->breadcrumbs=array(
	'Space Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Space Requests', 'url'=>array('index')),
	array('label'=>'Manage Space Requests', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>