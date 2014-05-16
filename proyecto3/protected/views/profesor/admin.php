<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Create Profesor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profesor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>GESTION DE PROFESORES</h1>

<p>
TAMBIEN PUEDE ESCRIBIR UN OPERADOR DE COMPARACION (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) AL INICIO DE CADA UNO DE LOS VALORES DE BUSQUEDA PARA ESPECIFICAR COMO SE DEBE HACER LA COMPARACION.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'profesor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pro_rut',		
		'pro_nombre',
		'pro_apellido_paterno',
		'pro_email',
		'pro_tipo',
		
		/*
		'pro_clave',
		'pro_apellido_materno',
		'pro_fono',
		'pro_direccion',
		'adm_rut',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
