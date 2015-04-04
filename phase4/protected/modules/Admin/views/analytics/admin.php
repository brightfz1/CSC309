<?php
$this->pageCaption='Manage Analytics';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Administer all analytics';
$this->breadcrumbs=array(
	'Analytics'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Analytics', 'url'=>array('index')),
	array('label'=>'Create Analytics', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('analytics-grid', {
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
	'id'=>'analytics-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'zebra-striped',
	'columns'=>array(
		'id',
		'num_users',
		'num_renting_users',
		'num_spaces',
		'num_groups',
		'num_leases',
		/*
		'avg_groups_per_space',
		'avg_users_per_space',
		'avg_users_per_group',
		'avg_distance_to_space',
		'num_owning_users',
		'percent_users_owning',
		'percent_users_renting',
		'avg_groups_per_user',
		'avg_spaces_per_user',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
