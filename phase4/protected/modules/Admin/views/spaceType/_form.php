<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'space-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'label'); ?>">
		<?php echo $form->labelEx($model,'label'); ?>
		<div class="input">
			<?php echo $form->textField($model,'label',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'label'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->