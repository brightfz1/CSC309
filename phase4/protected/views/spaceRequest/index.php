<?php
$this->pageCaption='Space Requests';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all space requests';
$this->breadcrumbs=array(
	'Space Requests',
);

$this->menu=array(
	array('label'=>'Create SpaceRequest', 'url'=>array('create')),
	array('label'=>'Manage SpaceRequest', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
