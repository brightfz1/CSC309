<?php
$this->pageCaption='Update SpaceType '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Space Types'=>array('index'),
	'Update',
);

$this->menu=array(
	array('label'=>'List Space Types', 'url'=>array('index')),
	array('label'=>'Create SpaceType', 'url'=>array('create')),
	array('label'=>'View SpaceType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Space Types', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>