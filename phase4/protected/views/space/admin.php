<?php
$this->pageCaption='Manage your spaces';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Administer the spaces which you have ownership of';
$this->breadcrumbs=array(
	'Spaces'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Spaces', 'url'=>array('index')),
	array('label'=>'Create Space', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('space-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'space-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'zebra-striped',
	'columns'=>array(
		//'id',
		'name',
		'address',
		'description',
		'tag',
		'space_type',
	//	'num_ratings',
	//	'num_tenants',
		/*
		'num_groups',
		'OWNER_SID',
		'rating_score',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
