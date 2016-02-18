<?php
/* @var $this DispoRequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dispo Requests',
);

$this->menu=array(
	array('label'=>'Create DispoRequest', 'url'=>array('create')),
	array('label'=>'Manage DispoRequest', 'url'=>array('admin')),
);
?>

<h1>Dispo Requests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
