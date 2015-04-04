<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_score')); ?>:</b>
	<?php echo CHtml::encode($data->rating_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_ratings')); ?>:</b>
	<?php echo CHtml::encode($data->num_ratings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_tenants')); ?>:</b>
	<?php echo CHtml::encode($data->num_tenants); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('num_groups')); ?>:</b>
	<?php echo CHtml::encode($data->num_groups); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OWNER_SID')); ?>:</b>
	<?php echo CHtml::encode($data->OWNER_SID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tag')); ?>:</b>
	<?php echo CHtml::encode($data->tag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('space_type')); ?>:</b>
	<?php echo CHtml::encode($data->space_type); ?>
	<br />

	*/ ?>

</div>