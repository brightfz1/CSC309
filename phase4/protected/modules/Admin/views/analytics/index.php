<?php
$this->pageCaption='Analytics';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all analytics';
$this->breadcrumbs=array(
	'Analytics',
);

$this->menu=array(
	array('label'=>'Create Analytics', 'url'=>array('create')),
	array('label'=>'Manage Analytics', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
