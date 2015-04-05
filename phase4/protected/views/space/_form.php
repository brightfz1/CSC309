<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'space-form',
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

	<div class="<?php echo $form->fieldClass($model, 'address'); ?>">
		<?php echo $form->labelEx($model,'address'); ?>
		<div class="input">
			<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'address'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'description'); ?>">
		<?php echo $form->labelEx($model,'description'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
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

	<div class="<?php echo $form->fieldClass($model, 'space_type'); ?>">
		<?php echo $form->labelEx($model,'space_type'); ?>
		<div class="input">
			<?php echo $form->textField($model,'space_type',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'space_type'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->