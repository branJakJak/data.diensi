<?php
/* @var $this DispoConfigurationController */
/* @var $model DispoConfiguration */

$this->breadcrumbs=array(
	'Dispo Configurations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dispo Configuration', 'url'=>array('index')),
	array('label'=>'Create Dispo Configuration', 'url'=>array('create')),
	array('label'=>'View Dispo Configuration', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dispo Configuration', 'url'=>array('admin')),
);
?>

<h1>Update DispoConfiguration <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>