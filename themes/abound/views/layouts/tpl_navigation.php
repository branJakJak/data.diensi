<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <?php echo CHtml::link(Yii::app()->name, array('/site/index'), array('class'=>'brand')); ?>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Logs', 'url'=>array('/dispoRequest/admin'),'visible'=>!Yii::app()->user->isGuest),
                        // array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
       //                  'items'=>array(
       //                      array('label'=>'My Messages <span class="badge badge-warning pull-right">26</span>', 'url'=>'#'),
							// array('label'=>'My Tasks <span class="badge badge-important pull-right">112</span>', 'url'=>'#'),
							// array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
							// array('label'=>'Separated link', 'url'=>'#'),
							// array('label'=>'One more separated link', 'url'=>'#'),
       //                  )),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
          	</div>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->