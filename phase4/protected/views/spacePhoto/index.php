<?php
$this->pageCaption='Space Photos';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all space photos';
$this->breadcrumbs=array(
	'Space Photos',
);

$this->menu=array(
	array('label'=>'Create SpacePhoto', 'url'=>array('create')),
	array('label'=>'Manage SpacePhoto', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>