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
		<?php echo $form->label($model,'TIME'); ?>
		<div class="input">
			<?php echo $form->textField($model,'TIME'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'max_users'); ?>
		<div class="input">
			<?php echo $form->textField($model,'max_users',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->