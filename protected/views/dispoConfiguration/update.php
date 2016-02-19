<?php
/* @var $this DispoConfigurationController */
/* @var $model DispoConfiguration */

$this->breadcrumbs=array(
	'Dispo Configurations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DispoConfiguration', 'url'=>array('index')),
	array('label'=>'Create DispoConfiguration', 'url'=>array('create')),
	array('label'=>'View DispoConfiguration', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DispoConfiguration', 'url'=>array('admin')),
);
?>

<h1>Update DispoConfiguration <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>