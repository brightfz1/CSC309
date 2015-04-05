<div class="view">

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); */?>

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('SID')); ?>:</b>
	<?php echo CHtml::encode($data->SID); */?>


    <b><?php /*echo CHtml::encode($data->getAttributeLabel('name')); */?></b>
	<?php /*echo CHtml::encode($data->name); */?>


	<?php echo CHtml::link($data->tag,array('group/view', 'id'=>$data->id)); ?>
    <br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('description')); */?></b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Number of members')); ?>:</b>
	<?php echo CHtml::encode($data->num_members); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Interest keywords')); ?>:</b>
	<?php echo CHtml::encode($data->tag); ?>

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('OWNER_SID')); ?>:</b>
	<?php echo CHtml::encode($data->OWNER_SID); */?>

</div>