<?php
$this->pageCaption='Create SpaceType';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new spacetype';
$this->breadcrumbs=array(
	'Space Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Space Types', 'url'=>array('index')),
	array('label'=>'Manage Space Types', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>