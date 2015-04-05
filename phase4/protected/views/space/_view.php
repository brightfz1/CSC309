<div class="view">

    <?php $photo = $data->ShowPhoto($data->id);
    foreach($photo as $photo){
    // echo  $group['gname'];
        echo CHtml::link(('<img src="data:image/jpeg;base64,' . base64_encode( $photo['pdata'] ) . '" height="100%" width="240"  />'),array('space/view', 'id'=>$data->id));
        echo "</br>";
        break;
    }?>
    
	<?php echo CHtml::link($data->name,array('space/view', 'id'=>$data->id)); ?>
    <br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('Address')); */?></b>
	<?php echo CHtml::encode($data->address); ?>
	<br />
	<br />
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('num_ratings')); ?>:</b>
	<?php echo CHtml::encode($data->num_ratings); ?>
	<br />
-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_score')); ?>:</b>
	<?php echo CHtml::encode($data->rating_score); ?>
	<br />
    
	<b><?php echo "Synergists Working Here" ?>:</b>
	<?php echo CHtml::encode($data->num_tenants); ?>
	<br />

	<b><?php echo "Active Groups" ?>:</b>
	<?php echo CHtml::encode($data->num_groups); ?>
	<br />

    
    <b><?php echo CHtml::encode($data->getAttributeLabel('space_type')); ?>:</b>
	<?php echo CHtml::encode($data->space_type); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('tag')); ?>:</b>
	<?php echo CHtml::encode($data->tag); ?>
	<br />
    <br />
	
    <b><?php /*echo CHtml::encode($data->getAttributeLabel('Description')); */?></b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
    
	</br>
<!--
	<h5>SynergyGroups in <?php echo $data->name ?>:</h5>
	<?php $groups = $data->ShowGroup($data->id);
	foreach($groups as $group){
        echo CHtml::link($group['gname'],array('group/view', 'id'=>$group['GID']));
        echo "</br>";
	}?>
-->

    <?php $groups = $data->ShowGroup($data->id);
    if(empty($groups)==FALSE){
    echo "<h5>SynergyGroups in  $data->name </h5>";
    //$groups = $model->ShowGroup($model->id);
    foreach($groups as $group){
        // echo  $group['gname'];
        echo CHtml::link($group['gname'],array('group/view', 'id'=>$group['GID']));
        echo "</br>";
    }
}else{
        echo "<h5>No groups currently meet at $data->name.</h5>";
        echo CHtml::link("Create a new group now!",array('group/create'));
}
?>

	</div>