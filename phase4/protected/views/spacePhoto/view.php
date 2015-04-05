<?php
$this->pageCaption='View SpacePhoto #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Space Photos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Go Back to ' . $model->SID, 'url'=>array('space/view', 'id'=>$model->SID)),
	array('label'=>'Upload New Photo', 'url'=>array('create')),
	array('label'=>'Replace Photo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Photo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Space Photos', 'url'=>array('admin')),
);
?>

<img src="data:image/jpeg;base64,<?= base64_encode($model->photo_data) ?>" height="100%" width="100%" />


<!--
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'id',
		'SID',
		'photo_filename',
		'photo_data',
	),
)); ?>
-->
