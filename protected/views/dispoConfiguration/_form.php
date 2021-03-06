<?php
/* @var $this DispoConfigurationController */
/* @var $model DispoConfiguration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dispo-configuration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dispo_name'); ?>
		<?php echo $form->textField($model,'dispo_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dispo_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'server_ip'); ?>
		<?php echo $form->textField($model,'server_ip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'server_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_id'); ?>
		<?php echo $form->textField($model,'list_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'list_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model,'user',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function'); ?>
		<?php echo $form->textField($model,'function',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'function'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_code'); ?>
		<?php echo $form->textField($model,'phone_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dnc_check'); ?>
		<?php echo $form->textField($model,'dnc_check',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dnc_check'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duplicate_check'); ?>
		<?php echo $form->textField($model,'duplicate_check',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'duplicate_check'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_to_hopper'); ?>
		<?php echo $form->textField($model,'add_to_hopper',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'add_to_hopper'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hopper_priority'); ?>
		<?php echo $form->textField($model,'hopper_priority',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hopper_priority'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->