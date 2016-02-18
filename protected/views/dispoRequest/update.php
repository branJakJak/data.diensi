<?php
/* @var $this DispoRequestController */
/* @var $model DispoRequest */

$this->breadcrumbs=array(
	'Dispo Requests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DispoRequest', 'url'=>array('index')),
	array('label'=>'Create DispoRequest', 'url'=>array('create')),
	array('label'=>'View DispoRequest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DispoRequest', 'url'=>array('admin')),
);
?>

<h1>Update DispoRequest <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>