<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'max-users-group-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'TIME'); ?>">
		<?php echo $form->labelEx($model,'TIME'); ?>
		<div class="input">
			<?php echo $form->textField($model,'TIME'); ?>
			<?php echo $form->error($model,'TIME'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'max_users'); ?>">
		<?php echo $form->labelEx($model,'max_users'); ?>
		<div class="input">
			<?php echo $form->textField($model,'max_users',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'max_users'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->