<?php
$this->pageCaption='Create SpaceTennantship';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new spacetennantship';
$this->breadcrumbs=array(
	'Space Tennantships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Space Tennantships', 'url'=>array('index')),
	array('label'=>'Manage Space Tennantships', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>