<?php
/* @var $this DispoConfigurationController */
/* @var $model DispoConfiguration */

$this->breadcrumbs=array(
	'Dispo Configurations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DispoConfiguration', 'url'=>array('index')),
	array('label'=>'Manage DispoConfiguration', 'url'=>array('admin')),
);
?>

<h1>Create DispoConfiguration</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>