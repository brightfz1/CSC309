<?php
$this->pageCaption='Space Types';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all space types';
$this->breadcrumbs=array(
	'Space Types',
);

$this->menu=array(
	array('label'=>'Create SpaceType', 'url'=>array('create')),
	array('label'=>'Manage SpaceType', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
