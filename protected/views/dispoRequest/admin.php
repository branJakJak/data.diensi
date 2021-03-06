<?php
/* @var $this DispoRequestController */
/* @var $model DispoRequest */

$this->breadcrumbs=array(
	'Dispo Requests'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dispo Request', 'url'=>array('index')),
	array('label'=>'Create Dispo Request', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dispo-request-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dispo Requests</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dispo-request-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'dispo_conf_id',
		'mobile_number',
		'request_parameters',
		'request_from',
		'date_submitted',
		/*
		'response_message',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
