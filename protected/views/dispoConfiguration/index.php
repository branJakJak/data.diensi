<?php
/* @var $this DispoConfigurationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dispo Configurations',
);

$this->menu=array(
	array('label'=>'Create Dispo Configuration', 'url'=>array('create')),
	array('label'=>'Manage Dispo Configuration', 'url'=>array('admin')),
);
?>

<h1>Dispo Configurations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
