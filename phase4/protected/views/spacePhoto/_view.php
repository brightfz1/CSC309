<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SID')); ?>:</b>
	<?php echo CHtml::encode($data->SID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_filename')); ?>:</b>
	<?php echo CHtml::encode($data->photo_filename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_data')); ?>:</b>
	<?php echo CHtml::encode($data->photo_data); ?>
	<br />


</div>