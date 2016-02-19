<?php
/* @var $this DispoRequestController */
/* @var $model DispoRequest */

$this->breadcrumbs=array(
	'Dispo Requests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dispo Request', 'url'=>array('index')),
	array('label'=>'Create Dispo Request', 'url'=>array('create')),
	array('label'=>'View Dispo Request', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dispo Request', 'url'=>array('admin')),
);
?>

<h1>Update DispoRequest <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>