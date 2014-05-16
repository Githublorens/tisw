<?php
/* @var $this UController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear Usuario',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Gestion Usuario', 'url'=>array('admin')),
);
?>

<h1>CREAR USUARIO</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>