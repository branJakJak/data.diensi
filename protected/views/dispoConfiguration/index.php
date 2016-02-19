<?php
/* @var $this DispoConfigurationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dispo Configurations',
);

$this->menu=array(
	array('label'=>'Create DispoConfiguration', 'url'=>array('create')),
	array('label'=>'Manage DispoConfiguration', 'url'=>array('admin')),
);
?>

<h1>Dispo Configurations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
