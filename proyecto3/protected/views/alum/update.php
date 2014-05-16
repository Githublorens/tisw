<?php
/* @var $this AlumController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->alu_rut=>array('view','id'=>$model->alu_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumno', 'url'=>array('index')),
	array('label'=>'Create Alumno', 'url'=>array('create')),
	array('label'=>'View Alumno', 'url'=>array('view', 'id'=>$model->alu_rut)),
	array('label'=>'Manage Alumno', 'url'=>array('admin')),
);
?>

<h1>Update Alumno <?php echo $model->alu_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>