<?php
/* @var $this DispoConfigurationController */
/* @var $data DispoConfiguration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dispo_name')); ?>:</b>
	<?php echo CHtml::encode($data->dispo_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('server_ip')); ?>:</b>
	<?php echo CHtml::encode($data->server_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_id')); ?>:</b>
	<?php echo CHtml::encode($data->list_id); ?>
	<br />


</div>