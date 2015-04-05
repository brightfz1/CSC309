<div class="form">

<?php $form = $this->beginWidget('CActiveForm', [
    'id' => 'SpacePhoto-form',
    //'enableAjaxValidation' => true,
    //'enableClientValidation' => true,
    'stateful' => true,
    'htmlOptions' => ['enctype' => 'multipart/form-data'],
]); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'photo_data'); ?>
        <?php echo $form->fileField($model, 'photo_data'); ?>
        <?php echo $form->error($model, 'photo_data'); ?>
        <?php echo $form->textField($model,'SID',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'SID'); ?>
    </div>
    
	

	

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Upload Image' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->