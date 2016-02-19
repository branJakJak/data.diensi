<?php
/* @var $this DispoRequestController */
/* @var $model DispoRequest */

$this->breadcrumbs=array(
	'Dispo Requests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dispo Request', 'url'=>array('index')),
	array('label'=>'Create Dispo Request', 'url'=>array('create')),
	array('label'=>'Update Dispo Request', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dispo Request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dispo Request', 'url'=>array('admin')),
);
?>

<h1>View DispoRequest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dispo_conf_id',
		'mobile_number',
		'request_parameters',
		'request_from',
		'date_submitted',
		'response_message',
	),
)); ?>
