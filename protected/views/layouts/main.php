<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

        <?php
        Yii::app()->bootstrap->registerAllCss();
        Yii::app()->bootstrap->registerCoreScripts();
        ?>        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


	<!-- header -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                   
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo Yii::app()->homeUrl; ?>">
                    <?php echo CHtml::encode(Yii::app()->name); ?>
                    </a>
                    <div class="nav-collapse collapse">

		<?php $this->widget('bootstrap.widgets.TbMenu',array(
			'items'=>array(
                                array('label' => 'Home', 'url' => array('/site/index')),
                                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                                array('label' => 'Contact', 'url' => array('/site/contact')),
                                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Archivo (' . Yii::app()->user->name . ')', 'url' => array('/paciente/index'), 'visible' => !Yii::app()->user->isGuest)
                            ),
                    'htmlOptions'=>array('class'=>'nav navbar-nav')
		)); ?>
                    </div>
                </div>
            </div>
	</div>
        <!-- mainmenu -->
        <div class="container">
            <div class="page-header">
                
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
            </div>
	<?php echo $content; ?>

	
	<div class="footer text-center">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

        </div><!-- page -->

</body>
</html>
