<?php
$this->pageCaption='Update SpaceRequest '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Space Requests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Space Requests', 'url'=>array('index')),
	array('label'=>'Create SpaceRequest', 'url'=>array('create')),
	array('label'=>'View SpaceRequest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Space Requests', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>