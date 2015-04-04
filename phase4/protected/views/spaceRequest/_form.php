<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'space-request-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'UID'); ?>">
		<?php echo $form->labelEx($model,'UID'); ?>
		<div class="input">
			<?php echo $form->textField($model,'UID',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'UID'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'SID'); ?>">
		<?php echo $form->labelEx($model,'SID'); ?>
		<div class="input">
			<?php echo $form->textField($model,'SID',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'SID'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'acceptance'); ?>">
		<?php echo $form->labelEx($model,'acceptance'); ?>
		<div class="input">
			<?php echo $form->textField($model,'acceptance',array('size'=>1,'maxlength'=>1)); ?>
			<?php echo $form->error($model,'acceptance'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'time_of_request'); ?>">
		<?php echo $form->labelEx($model,'time_of_request'); ?>
		<div class="input">
			<?php echo $form->textField($model,'time_of_request'); ?>
			<?php echo $form->error($model,'time_of_request'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->