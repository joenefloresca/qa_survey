<?php /* @var $this Controller */ ?>
<?php //Yii::app()->bootstrap->register(); 
       
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.datetimepicker.css">
        

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.datetimepicker.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php

	if (Yii::app()->user->isGuest) {
              $this->widget('zii.widgets.CMenu',array(
              'activeCssClass' => 'active',
              'activateParents' => true,
              'items'=>array(
                   // array('label'=>'Home', 'url'=>array('/site/index')),
                    //array('label'=>'Forms', 'url'=>array('/forms/')),
		    array('label'=>'Login', 'url'=>array('/site/login')),
                            ),
                        ));
                    } else {
                        $this->widget('zii.widgets.CMenu',array(
                            'activeCssClass' => 'active',
                            'activateParents' => true,
                            'items'=>array(
                                array('label'=>'Forms', 'url'=>array('/forms/')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'))
                            ),
                        ));
                    }

?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Quinn Data Facilities Inc.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
