<?php
$this->pageCaption='SynergySpaces';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Your spaces';
$this->breadcrumbs=array(
	'Spaces',
);


$this->menu=array(
	array('label'=>'Create Space', 'url'=>array('create')),
	array('label'=>'Manage Space', 'url'=>array('admin')),
);

?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


