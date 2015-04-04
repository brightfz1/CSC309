<?php
$this->pageCaption='Update MaxUsersGroup '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Max Users Groups'=>array('index'),
	'Update',
);

$this->menu=array(
	array('label'=>'List Max Users Groups', 'url'=>array('index')),
	array('label'=>'Create MaxUsersGroup', 'url'=>array('create')),
	array('label'=>'View MaxUsersGroup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Max Users Groups', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>