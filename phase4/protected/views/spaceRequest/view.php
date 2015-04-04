<?php
$this->pageCaption='View SpaceRequest #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Space Requests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Space Requests', 'url'=>array('index')),
	array('label'=>'Create SpaceRequest', 'url'=>array('create')),
	array('label'=>'Update SpaceRequest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SpaceRequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Space Requests', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'id',
		'UID',
		'SID',
		'acceptance',
		'time_of_request',
	),
)); ?>
