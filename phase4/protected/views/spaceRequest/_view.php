<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UID')); ?>:</b>
	<?php echo CHtml::encode($data->UID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SID')); ?>:</b>
	<?php echo CHtml::encode($data->SID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acceptance')); ?>:</b>
	<?php echo CHtml::encode($data->acceptance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_of_request')); ?>:</b>
	<?php echo CHtml::encode($data->time_of_request); ?>
	<br />


</div>