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

	<b><?php echo CHtml::encode($data->getAttributeLabel('source')); ?>:</b>
	<?php echo CHtml::encode($data->source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass')); ?>:</b>
	<?php echo CHtml::encode($data->pass); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('function')); ?>:</b>
	<?php echo CHtml::encode($data->function); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_code')); ?>:</b>
	<?php echo CHtml::encode($data->phone_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dnc_check')); ?>:</b>
	<?php echo CHtml::encode($data->dnc_check); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duplicate_check')); ?>:</b>
	<?php echo CHtml::encode($data->duplicate_check); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_to_hopper')); ?>:</b>
	<?php echo CHtml::encode($data->add_to_hopper); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopper_priority')); ?>:</b>
	<?php echo CHtml::encode($data->hopper_priority); ?>
	<br />

	*/ ?>

</div>