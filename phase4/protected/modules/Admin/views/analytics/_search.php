<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_users'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_users',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_renting_users'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_renting_users',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_spaces'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_spaces',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_groups'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_groups',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_leases'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_leases',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'avg_groups_per_space'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_groups_per_space'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'avg_users_per_space'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_users_per_space'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'avg_users_per_group'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_users_per_group'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'avg_distance_to_space'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_distance_to_space'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_owning_users'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_owning_users',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'percent_users_owning'); ?>
		<div class="input">
			<?php echo $form->textField($model,'percent_users_owning'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'percent_users_renting'); ?>
		<div class="input">
			<?php echo $form->textField($model,'percent_users_renting'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'avg_groups_per_user'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_groups_per_user'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'avg_spaces_per_user'); ?>
		<div class="input">
			<?php echo $form->textField($model,'avg_spaces_per_user'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->