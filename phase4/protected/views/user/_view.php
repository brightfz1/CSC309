<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tag')); ?>:</b>
	<?php echo CHtml::encode($data->tag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address')); ?>:</b>
	<?php echo CHtml::encode($data->email_address); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bio')); ?>:</b>
	<?php echo CHtml::encode($data->bio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_score')); ?>:</b>
	<?php echo CHtml::encode($data->rating_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_ratings')); ?>:</b>
	<?php echo CHtml::encode($data->num_ratings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_groups')); ?>:</b>
	<?php echo CHtml::encode($data->num_groups); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_spaces_renting')); ?>:</b>
	<?php echo CHtml::encode($data->num_spaces_renting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_spaces_owning')); ?>:</b>
	<?php echo CHtml::encode($data->num_spaces_owning); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_filename')); ?>:</b>
	<?php echo CHtml::encode($data->photo_filename); ?>
	<br />


</div>