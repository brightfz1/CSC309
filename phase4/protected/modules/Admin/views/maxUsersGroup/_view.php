<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIME')); ?>:</b>
	<?php echo CHtml::encode($data->TIME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_users')); ?>:</b>
	<?php echo CHtml::encode($data->max_users); ?>
	<br />


</div>