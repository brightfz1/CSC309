<?php
$this->pageCaption='View SpaceTennantship #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Space Tennantships'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Space Tennantships', 'url'=>array('index')),
	array('label'=>'Create SpaceTennantship', 'url'=>array('create')),
	array('label'=>'Update SpaceTennantship', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SpaceTennantship', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Space Tennantships', 'url'=>array('admin')),
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
	),
)); ?>
