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
		<?php echo $form->label($model,'SID'); ?>
		<div class="input">
			<?php echo $form->textField($model,'SID',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'description'); ?>
		<div class="input">
			<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_members'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_members',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'tag'); ?>
		<div class="input">
			<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'OWNER_SID'); ?>
		<div class="input">
			<?php echo $form->textField($model,'OWNER_SID',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->