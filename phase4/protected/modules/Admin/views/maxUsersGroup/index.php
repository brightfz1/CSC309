<?php
$this->pageCaption='Max Users Groups';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all max users groups';
$this->breadcrumbs=array(
	'Max Users Groups',
);

$this->menu=array(
	array('label'=>'Create MaxUsersGroup', 'url'=>array('create')),
	array('label'=>'Manage MaxUsersGroup', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
