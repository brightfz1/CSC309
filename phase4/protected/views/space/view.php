<?php
$this->pageCaption='View Space #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Spaces'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Spaces', 'url'=>array('index')),
	array('label'=>'Create Space', 'url'=>array('create')),
	array('label'=>'Update Space', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Space', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Spaces', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'description',
		'rating_score',
		'num_ratings',
		'num_tenants',
		'num_groups',
		'OWNER_SID',
		'tag',
		'space_type',
	),
)); ?>
