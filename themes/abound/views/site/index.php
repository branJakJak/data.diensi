<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>


<div class="row-fluid">
    <div class="span8 offset2">

        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'<strong class="">Dispo Redirect Configuration</strong>',
            ));
        ?>
        <?php echo CHtml::link('Create new', array('/dispoConfiguration/create'), array('class'=>'btn btn-primary')); ?>

        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'dispo-configuration-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
                'source',
                'dispo_name',
                'list_id',
                array(
                    'class'=>'CButtonColumn',
                    'viewButtonUrl'=>'Yii::app()->controller->createUrl("/dispoConfiguration/view",array("id"=>$data->primaryKey))',
                    'updateButtonUrl'=>'Yii::app()->controller->createUrl("/dispoConfiguration/update",array("id"=>$data->primaryKey))',
                    'deleteButtonUrl'=>'Yii::app()->controller->createUrl("/dispoConfiguration/delete",array("id"=>$data->primaryKey))',
                ),
            ),
        )); ?>
        <?php
            $this->endWidget();
        ?>
    </div>
</div>