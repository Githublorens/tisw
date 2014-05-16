<?php
/* @var $this AlumController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Ingresar Alumno',
);

$this->menu=array(
	array('label'=>'Lista Alumnos', 'url'=>array('index')),
	array('label'=>'Gestion Alumno', 'url'=>array('admin')),
);
?>

<h1>INGRESAR ALUMNO</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>