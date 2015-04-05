<?php
$this->pageCaption='Update My Profile';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Synergists', 'url'=>array('index')),
	array('label'=>'View My Profile', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<?php echo $this->renderPartial('_Updateform', array('model'=>$model)); ?>