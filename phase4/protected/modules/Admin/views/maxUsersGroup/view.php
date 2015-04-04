<?php
$this->pageCaption='View MaxUsersGroup #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Max Users Groups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Max Users Groups', 'url'=>array('index')),
	array('label'=>'Create MaxUsersGroup', 'url'=>array('create')),
	array('label'=>'Update MaxUsersGroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MaxUsersGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Max Users Groups', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'id',
		'TIME',
		'max_users',
	),
)); ?>
