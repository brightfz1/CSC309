<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="clearfix">
		<?php echo $form->label($model,'name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'address'); ?>
		<div class="input">
			<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'description'); ?>
		<div class="input">
			<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'tag'); ?>
		<div class="input">
			<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'space_type'); ?>
		<div class="input">
			<?php echo $form->textField($model,'space_type',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->