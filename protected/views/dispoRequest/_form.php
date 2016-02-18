<?php
/* @var $this DispoRequestController */
/* @var $model DispoRequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dispo-request-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dispo_conf_id'); ?>
		<?php echo $form->textField($model,'dispo_conf_id'); ?>
		<?php echo $form->error($model,'dispo_conf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request_parameters'); ?>
		<?php echo $form->textArea($model,'request_parameters',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'request_parameters'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request_from'); ?>
		<?php echo $form->textField($model,'request_from',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'request_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_submitted'); ?>
		<?php echo $form->textField($model,'date_submitted'); ?>
		<?php echo $form->error($model,'date_submitted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->