<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" /> 

	<?php
	echo Yii::app()->bootstrap->registerAllCss();
	echo Yii::app()->bootstrap->registerCoreScripts();
	?>
	<!--  blueprint CSS framework 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner"> 
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toogle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>	
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<a class="brand" href="<?php echo Yii::app()->homeUrl; ?>">
				<?php  echo Yii::app()->name; ?>	
				</a>
				<div class="nav-collapse collapse">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Informaciones', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Ingresar Profesor', 'url'=>array('/profesor/create'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Profesores', 'url'=>array('/profesor/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Ingresar Alumno', 'url'=>array('/alum/create'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Alumnos', 'url'=>array('/alum/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Contacto', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions' => array('class' => 'nav navbar-nav'),
		)); ?>
		</div>
		</div>
		</div>
	</div><!-- mainmenu -->

	<div class="container">
		<div class="page-header">

			<br /> <br />
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	</div>

	<?php echo $content; ?>

	<div class="clear"></div>

</div>
<div class="footer text-center">
		Copyright &copy; <?php echo date('Y'); ?> por Grupo7.<br/>
		Taller de Ingenier&iacute;a de Software<br/>
		Universidad del B&iacute;o-B&iacute;o<br/>
		
	</div><!-- footer -->
</body>
</html>
