<?php
$this->pageCaption='Synergist';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='All Synergists';
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
