<?php
$this->pageCaption='Create Analytics';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new analytics';
$this->breadcrumbs=array(
	'Analytics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Analytics', 'url'=>array('index')),
	array('label'=>'Manage Analytics', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>