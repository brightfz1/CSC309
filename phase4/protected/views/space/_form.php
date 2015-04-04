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
			<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
			<?php echo $form->error($model,'description'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'rating_score'); ?>">
		<?php echo $form->labelEx($model,'rating_score'); ?>
		<div class="input">
			<?php echo $form->textField($model,'rating_score'); ?>
			<?php echo $form->error($model,'rating_score'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_ratings'); ?>">
		<?php echo $form->labelEx($model,'num_ratings'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_ratings',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_ratings'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_tenants'); ?>">
		<?php echo $form->labelEx($model,'num_tenants'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_tenants',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_tenants'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_groups'); ?>">
		<?php echo $form->labelEx($model,'num_groups'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_groups',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_groups'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'OWNER_SID'); ?>">
		<?php echo $form->labelEx($model,'OWNER_SID'); ?>
		<div class="input">
			<?php echo $form->textField($model,'OWNER_SID',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'OWNER_SID'); ?>
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
			<?php echo $form->textField($model,'space_type'); ?>
			<?php echo $form->error($model,'space_type'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->