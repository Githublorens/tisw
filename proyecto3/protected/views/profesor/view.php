<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesors'=>array('index'),
	$model->pro_rut,
);

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Create Profesor', 'url'=>array('create')),
	array('label'=>'Update Profesor', 'url'=>array('update', 'id'=>$model->pro_rut)),
	array('label'=>'Delete Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pro_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesor', 'url'=>array('admin')),
);
?>

<h1>View Profesor #<?php echo $model->pro_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pro_rut',
		'pro_clave',
		'pro_nombre',
		'pro_apellido_paterno',
		'pro_apellido_materno',
		'pro_direccion',
		'pro_email',
		'pro_fono',
		'pro_tipo',
		'adm_rut',
	),
)); ?>
