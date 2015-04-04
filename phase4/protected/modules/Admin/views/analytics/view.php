<?php
$this->pageCaption='View Analytics #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Analytics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Analytics', 'url'=>array('index')),
	array('label'=>'Create Analytics', 'url'=>array('create')),
	array('label'=>'Update Analytics', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Analytics', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Analytics', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'id',
		'num_users',
		'num_renting_users',
		'num_spaces',
		'num_groups',
		'num_leases',
		'avg_groups_per_space',
		'avg_users_per_space',
		'avg_users_per_group',
		'avg_distance_to_space',
		'num_owning_users',
		'percent_users_owning',
		'percent_users_renting',
		'avg_groups_per_user',
		'avg_spaces_per_user',
	),
)); ?>
