<?php
/* @var $this DispoRequestController */
/* @var $data DispoRequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dispo_conf_id')); ?>:</b>
	<?php echo CHtml::encode($data->dispo_conf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_number')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_parameters')); ?>:</b>
	<?php echo CHtml::encode($data->request_parameters); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_from')); ?>:</b>
	<?php echo CHtml::encode($data->request_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_submitted')); ?>:</b>
	<?php echo CHtml::encode($data->date_submitted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response_message')); ?>:</b>
	<?php echo CHtml::encode($data->response_message); ?>
	<br />


</div>