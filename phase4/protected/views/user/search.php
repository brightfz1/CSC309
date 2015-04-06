<?php
$this->pageCaption='Search Synergists';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Synergists', 'url'=>array('index')),
	array('label'=>'Update My Profile', 'url'=>array('update','id'=>$model->id)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
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
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'zebra-striped',
	'columns'=>array(
		'id',
		//'tag',
		'email_address',
		//'password',
		'first_name',
		'last_name',
		'rating_score',
		/*
		'address',
		'gender',
		'phone_number',
		'bio',
		'rating_score',
		'num_ratings',
		'num_groups',
		'num_spaces_renting',
		'num_spaces_owning',
		'photo_filename',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}'
		),
	),
)); ?>
