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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->