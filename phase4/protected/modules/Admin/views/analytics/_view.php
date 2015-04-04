<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_users')); ?>:</b>
	<?php echo CHtml::encode($data->num_users); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_renting_users')); ?>:</b>
	<?php echo CHtml::encode($data->num_renting_users); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_spaces')); ?>:</b>
	<?php echo CHtml::encode($data->num_spaces); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_groups')); ?>:</b>
	<?php echo CHtml::encode($data->num_groups); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_leases')); ?>:</b>
	<?php echo CHtml::encode($data->num_leases); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avg_groups_per_space')); ?>:</b>
	<?php echo CHtml::encode($data->avg_groups_per_space); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('avg_users_per_space')); ?>:</b>
	<?php echo CHtml::encode($data->avg_users_per_space); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avg_users_per_group')); ?>:</b>
	<?php echo CHtml::encode($data->avg_users_per_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avg_distance_to_space')); ?>:</b>
	<?php echo CHtml::encode($data->avg_distance_to_space); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_owning_users')); ?>:</b>
	<?php echo CHtml::encode($data->num_owning_users); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percent_users_owning')); ?>:</b>
	<?php echo CHtml::encode($data->percent_users_owning); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percent_users_renting')); ?>:</b>
	<?php echo CHtml::encode($data->percent_users_renting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avg_groups_per_user')); ?>:</b>
	<?php echo CHtml::encode($data->avg_groups_per_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avg_spaces_per_user')); ?>:</b>
	<?php echo CHtml::encode($data->avg_spaces_per_user); ?>
	<br />

	*/ ?>

</div>