<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'email_address'); ?>">
		<?php echo $form->labelEx($model,'email_address'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email_address',array('size'=>60,'maxlength'=>254)); ?>
			<?php echo $form->error($model,'email_address'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'password'); ?>">
		<?php echo $form->labelEx($model,'password'); ?>
		<div class="input">
			<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'first_name'); ?>">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'first_name'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'last_name'); ?>">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'last_name'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'address'); ?>">
		<?php echo $form->labelEx($model,'address'); ?>
		<div class="input">
			<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'address'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'gender'); ?>">
		<?php echo $form->labelEx($model,'gender'); ?>
		<div class="input">
			<?php echo $form->textField($model,'gender',array('size'=>32,'maxlength'=>32)); ?>
			<?php echo $form->error($model,'gender'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'phone_number'); ?>">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<div class="input">
			<?php echo $form->textField($model,'phone_number',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'phone_number'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'bio'); ?>">
		<?php echo $form->labelEx($model,'bio'); ?>
		<div class="input">
			<?php echo $form->textField($model,'bio',array('size'=>60,'maxlength'=>1000)); ?>
			<?php echo $form->error($model,'bio'); ?>
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

	<div class="<?php echo $form->fieldClass($model, 'num_groups'); ?>">
		<?php echo $form->labelEx($model,'num_groups'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_groups',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_groups'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_spaces_renting'); ?>">
		<?php echo $form->labelEx($model,'num_spaces_renting'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_spaces_renting',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_spaces_renting'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_spaces_owning'); ?>">
		<?php echo $form->labelEx($model,'num_spaces_owning'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_spaces_owning',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_spaces_owning'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'photo_filename'); ?>">
		<?php echo $form->labelEx($model,'photo_filename'); ?>
		<div class="input">
			<?php echo $form->textField($model,'photo_filename',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'photo_filename'); ?>
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