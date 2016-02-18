<?php
/* @var $this DispoRequestController */
/* @var $model DispoRequest */

$this->breadcrumbs=array(
	'Dispo Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DispoRequest', 'url'=>array('index')),
	array('label'=>'Manage DispoRequest', 'url'=>array('admin')),
);
?>

<h1>Create DispoRequest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>