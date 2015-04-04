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
		<?php echo $form->label($model,'UID'); ?>
		<div class="input">
			<?php echo $form->textField($model,'UID',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'SID'); ?>
		<div class="input">
			<?php echo $form->textField($model,'SID',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'acceptance'); ?>
		<div class="input">
			<?php echo $form->textField($model,'acceptance',array('size'=>1,'maxlength'=>1)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'time_of_request'); ?>
		<div class="input">
			<?php echo $form->textField($model,'time_of_request'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->