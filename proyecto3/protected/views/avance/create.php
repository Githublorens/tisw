<?php
/* @var $this AvanceController */
/* @var $model Avance */

$this->breadcrumbs=array(
	'Avances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Avance', 'url'=>array('index'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('alumno')),
	array('label'=>'Manage Avance', 'url'=>array('admin'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('alumno')),
);
?>

<h1>INGRESAR AVANCE </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>