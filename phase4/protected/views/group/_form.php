<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'group-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'name'); ?>">
		<?php echo $form->labelEx($model,'name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'description'); ?>">
		<?php echo $form->labelEx($model,'description'); ?>
		<div class="input">
			<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
			<?php echo $form->error($model,'description'); ?>
		</div>
	</div>


	<div class="<?php echo $form->fieldClass($model, 'tag'); ?>">
		<?php echo $form->labelEx($model,'tag'); ?>
		<div class="input">
			<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'tag'); ?>
		</div>
	</div>
	

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->