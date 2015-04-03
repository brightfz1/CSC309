<?php
$this->pageCaption='View User #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Update My Profile', 'url'=>array('update','id'=>$model->id)),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		//'id',
		'email_address',
		//'password',
		'first_name',
		'last_name',
		'address',
		'gender',
		'phone_number',
		'bio',
		'rating_score',
		'num_ratings',
		'num_groups',
		'num_spaces_renting',
		'num_spaces_owning',
		'photo_filename',
		'tag',
	),
)); ?>
