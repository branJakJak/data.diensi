<?php
/* @var $this DispoConfigurationController */
/* @var $model DispoConfiguration */

$this->breadcrumbs=array(
	'Dispo Configurations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dispo Configuration', 'url'=>array('index')),
	array('label'=>'Create Dispo Configuration', 'url'=>array('create')),
	array('label'=>'Update Dispo Configuration', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dispo Configuration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dispo Configuration', 'url'=>array('admin')),
);
?>

<h1>View DispoConfiguration #<?php echo $model->dispo_name; ?></h1>
<?php
$this->widget('bootstrap.widgets.TbAlert', array(
    'fade'=>true,
    'closeText'=>'×',
    'alerts'=>array(
	    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
    ),
)); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dispo_name',
		'server_ip',
		'list_id',
	),
)); ?>
