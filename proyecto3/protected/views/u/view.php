<?php
/* @var $this UController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gesion Usuario', 'url'=>array('admin')),
);
?>

<h1>DATOS USUARIO #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>
