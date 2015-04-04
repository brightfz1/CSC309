<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'analytics-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'num_users'); ?>">
		<?php echo $form->labelEx($model,'num_users'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_users',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_users'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_renting_users'); ?>">
		<?php echo $form->labelEx($model,'num_renting_users'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_renting_users',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_renting_users'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_spaces'); ?>">
		<?php echo $form->labelEx($model,'num_spaces'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_spaces',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_spaces'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_groups'); ?>">
		<?php echo $form->labelEx($model,'num_groups'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_groups',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_groups'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_leases'); ?>">
		<?php echo $form->labelEx($model,'num_leases'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_leases',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_leases'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'avg_groups_per_space'); ?>">
		<?php echo $form->labelEx($model,'avg_groups_per_space'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_groups_per_space'); ?>
			<?php echo $form->error($model,'avg_groups_per_space'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'avg_users_per_space'); ?>">
		<?php echo $form->labelEx($model,'avg_users_per_space'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_users_per_space'); ?>
			<?php echo $form->error($model,'avg_users_per_space'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'avg_users_per_group'); ?>">
		<?php echo $form->labelEx($model,'avg_users_per_group'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_users_per_group'); ?>
			<?php echo $form->error($model,'avg_users_per_group'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'avg_distance_to_space'); ?>">
		<?php echo $form->labelEx($model,'avg_distance_to_space'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_distance_to_space'); ?>
			<?php echo $form->error($model,'avg_distance_to_space'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_owning_users'); ?>">
		<?php echo $form->labelEx($model,'num_owning_users'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_owning_users',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'num_owning_users'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'percent_users_owning'); ?>">
		<?php echo $form->labelEx($model,'percent_users_owning'); ?>
		<div class="input">
			<?php echo $form->textField($model,'percent_users_owning'); ?>
			<?php echo $form->error($model,'percent_users_owning'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'percent_users_renting'); ?>">
		<?php echo $form->labelEx($model,'percent_users_renting'); ?>
		<div class="input">
			<?php echo $form->textField($model,'percent_users_renting'); ?>
			<?php echo $form->error($model,'percent_users_renting'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'avg_groups_per_user'); ?>">
		<?php echo $form->labelEx($model,'avg_groups_per_user'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_groups_per_user'); ?>
			<?php echo $form->error($model,'avg_groups_per_user'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'avg_spaces_per_user'); ?>">
		<?php echo $form->labelEx($model,'avg_spaces_per_user'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_spaces_per_user'); ?>
			<?php echo $form->error($model,'avg_spaces_per_user'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->