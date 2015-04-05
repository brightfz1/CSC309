<?php
$this->pageCaption='Create SpacePhoto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new spacephoto';
$this->breadcrumbs=array(
	'Space Photos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Space Photos', 'url'=>array('index')),
	array('label'=>'Manage Space Photos', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>