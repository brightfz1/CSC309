<?php
$this->pageCaption='View Synergist '.$model->first_name;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Synergists', 'url'=>array('index')),
	array('label'=>'Update My Profile', 'url'=>array('update','id'=>$model->id)),
);
?>
<?php
$value=$this->widget('CStarRating',array(
	'model'=>$model,
	'name'=>'rating',
	'value'=> round($model->rating_score),
	'minRating'=>1 ,
	'maxRating'=>10 ,
	'starCount'=>10 ,
	'readOnly'=>true,

));
?>
<br><br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		//'id',
		array(
			'label'=>'Head Protrait',
			'type' => 'raw',
			'value'=>CHtml::image(Yii::app()->request->baseUrl.'/img/'.$model->photo_filename,'alt',array("width"=>"150px" )),
		),
		'email_address',
		//'password',
		'first_name',
		'last_name',
		'address',
		'gender',
		'phone_number',
		'bio',
		'num_groups',
		'num_spaces_renting',
		'num_spaces_owning',
		//'photo_filename',
		'tag',
	),
)); 
?>
	<br>
	<h3>Ideal Space</h3>
	<?php $spaces = $model->getSpaceRequest($model->id);
	foreach($spaces as $space){
		echo CHtml::link($space['name'],array('space/view', 'id'=>$space['SID']));
        echo "</br>";
	}?>
	<br />

	<br />
<?php
if ($model->id != Yii::app()->user->id && SpaceTennantship::IsFriend($model->id)) {
?>
<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
	<h3>Please Rate Here</h3>
    <?php echo $form->HiddenField($model,'email_address',array('size'=>60,'maxlength'=>254)); ?>
	<div class="actions">
		<?php echo CHtml::submitButton('1', array('submit' =>array('rating','id'=>$model->id,'value'=>1))); ?>&nbsp
		<?php echo CHtml::submitButton('2', array('submit' =>array('rating', 'id'=>$model->id,'value'=>2))); ?>&nbsp
		<?php echo CHtml::submitButton('3', array('submit' =>array('rating', 'id'=>$model->id,'value'=>3))); ?>&nbsp
		<?php echo CHtml::submitButton('4', array('submit' =>array('rating', 'id'=>$model->id,'value'=>4))); ?>&nbsp
		<?php echo CHtml::submitButton('5', array('submit' =>array('rating', 'id'=>$model->id,'value'=>5))); ?>&nbsp
		<?php echo CHtml::submitButton('6', array('submit' =>array('rating', 'id'=>$model->id,'value'=>6))); ?>&nbsp
		<?php echo CHtml::submitButton('7', array('submit' =>array('rating', 'id'=>$model->id,'value'=>7))); ?>&nbsp
		<?php echo CHtml::submitButton('8', array('submit' =>array('rating', 'id'=>$model->id,'value'=>8))); ?>&nbsp
		<?php echo CHtml::submitButton('9', array('submit' =>array('rating', 'id'=>$model->id,'value'=>9))); ?>&nbsp
		<?php echo CHtml::submitButton('10', array('submit' =>array('rating', 'id'=>$model->id,'value'=>10))); ?>&nbsp
	</div>

<?php $this->endWidget(); 
?>

</div><!-- form -->
<?php 
}
?>	