<?php
$this->pageCaption='Profile of SynergySpace: '.$model->name;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Spaces'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Go Back to Spaces', 'url'=>array('index')),
	array('label'=>'Create New Group in ' . $model->name, 'url'=>array('group/create')),
	array('label'=>'Update ' . $model->name, 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ' . $model->name, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ' . $model->name, 'url'=>array('admin')),
);
?>


<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
	

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
	<br>
	<br>
	<h3>Please Rate Here</h3>
    <?php echo $form->HiddenField($model,'address',array('size'=>60,'maxlength'=>254)); ?>
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

<?php $this->endWidget(); ?>

</div><!-- form -->

</br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		//'id',
		//'name',
		'address',
		'description',
		'num_ratings',
		'num_tenants',
		'num_groups',
		//'OWNER_SID',
		'tag',
		'space_type',
	),
)); ?>
</br>

<!-- 
	 <?php
if(isset($data)){
 foreach($data as $row): 
      echo $data->name;
 endforeach; }
 
 else{
 echo "No data???";
 }?>
 -->

	
<!-- 
<h1>SynergyGroups in <?php echo $model->name ?>:</h1>
</br>
<?php
$connection = Yii::app()->db;
$command = $connection->createCommand("Select * from space");
$caterow = $command->queryAll(); //executes the SQL statement and returns the all rows

foreach($caterow as $retcat )
{
    echo  $retcat["name"]  ;
    echo "</br>";
}
?>
<!-->

<?php $groups = $model->ShowGroup($model->id);
if(empty($groups)==FALSE){
    echo "<h3>SynergyGroups in $model->name:</h3>";
    //$groups = $model->ShowGroup($model->id);
    foreach($groups as $group){
        // echo  $group['gname'];
        echo CHtml::link($group['gname'],array('group/view', 'id'=>$group['GID']));
        echo "</br>";
    }
    echo "</br>";
}?>

<?php $photo = $model->ShowPhoto($model->id);
if(empty($photo)==FALSE){
    echo "<h3>Photos of $model->name:</h3>";
    foreach($photo as $photo){
        echo CHtml::link(('<img src="data:image/jpeg;base64,' . base64_encode( $photo['pdata'] ) . '" height="100%" width="500"  />'),array('spacePhoto/view', 'id'=>$photo['PID']));
    }
}?>

	 <?php /*echo $model->ShowGroup($model->id)[0]['gname']; */?>
 

