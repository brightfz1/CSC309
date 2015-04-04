<?php
$this->pageCaption='Create MaxUsersGroup';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new maxusersgroup';
$this->breadcrumbs=array(
	'Max Users Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Max Users Groups', 'url'=>array('index')),
	array('label'=>'Manage Max Users Groups', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>