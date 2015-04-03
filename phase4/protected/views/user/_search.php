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
		<?php echo $form->label($model,'tag'); ?>
		<div class="input">
			<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'email_address'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email_address',array('size'=>60,'maxlength'=>254)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'first_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'last_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'address'); ?>
		<div class="input">
			<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gender'); ?>
		<div class="input">
			<?php echo $form->textField($model,'gender',array('size'=>32,'maxlength'=>32)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'phone_number'); ?>
		<div class="input">
			<?php echo $form->textField($model,'phone_number',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'bio'); ?>
		<div class="input">
			<?php echo $form->textField($model,'bio',array('size'=>60,'maxlength'=>1000)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'rating_score'); ?>
		<div class="input">
			<?php echo $form->textField($model,'rating_score'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_ratings'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_ratings',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_groups'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_groups',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_spaces_renting'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_spaces_renting',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_spaces_owning'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_spaces_owning',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'photo_filename'); ?>
		<div class="input">
			<?php echo $form->textField($model,'photo_filename',array('size'=>50,'maxlength'=>50)); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->