<?php
$this->pageCaption='Update SpaceTennantship '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Space Tennantships'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Space Tennantships', 'url'=>array('index')),
	array('label'=>'Create SpaceTennantship', 'url'=>array('create')),
	array('label'=>'View SpaceTennantship', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Space Tennantships', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>