<?php
$this->pageCaption='Users';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all users';
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
		array('label'=>'View My Profile', 'url'=>array('view', 'id'=>Yii::app()->user->id)),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
