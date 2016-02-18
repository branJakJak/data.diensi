<?php
/* @var $this DispoRequestController */
/* @var $model DispoRequest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dispo_conf_id'); ?>
		<?php echo $form->textField($model,'dispo_conf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_parameters'); ?>
		<?php echo $form->textArea($model,'request_parameters',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_from'); ?>
		<?php echo $form->textField($model,'request_from',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_submitted'); ?>
		<?php echo $form->textField($model,'date_submitted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->