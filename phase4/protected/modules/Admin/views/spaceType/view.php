<?php
$this->pageCaption='View SpaceType #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Space Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Space Types', 'url'=>array('index')),
	array('label'=>'Create SpaceType', 'url'=>array('create')),
	array('label'=>'Update SpaceType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SpaceType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Space Types', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'id',
		'label',
	),
)); ?>
