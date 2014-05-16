<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Profesores', 'url'=>array('index')),
	array('label'=>'Gestion Profesor', 'url'=>array('admin')),
);
?>

<h1>INGRESAR PROFESOR</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>