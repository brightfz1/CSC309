<?php
$this->pageCaption='Update SpacePhoto '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Space Photos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Space Photos', 'url'=>array('index')),
	array('label'=>'Create SpacePhoto', 'url'=>array('create')),
	array('label'=>'View SpacePhoto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Space Photos', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>