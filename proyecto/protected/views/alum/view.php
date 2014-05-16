<?php
/* @var $this AlumController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->alu_rut,
);

$this->menu=array(
	array('label'=>'List Alumno', 'url'=>array('index')),
	array('label'=>'Create Alumno', 'url'=>array('create')),
	array('label'=>'Update Alumno', 'url'=>array('update', 'id'=>$model->alu_rut)),
	array('label'=>'Delete Alumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->alu_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumno', 'url'=>array('admin')),
);
?>

<h1>View Alumno #<?php echo $model->alu_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'alu_rut',
		'alu_clave',
		'alu_nombre',
		'alu_apellido_paterno',
		'alu_apellido_materno',
		'alu_direccion',
		'alu_email',
		'alu_fono',
		'alu_carrera',
		'alu_informe_curricular',
		'pro_rut',
		'jef_rut',
	),
)); ?>
