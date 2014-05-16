<?php
/* @var $this AlumController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Lista Alumnos', 'url'=>array('index')),
	array('label'=>'Ingresar Alumno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alumno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>GESTIONAR ALUMNOS</h1>

<p>
TAMBIEN PUEDE ESCRIBIR UN OPERADOR DE COMPARACION (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) AL INICIO DE CADA UNO DE LOS VALORES DE BUSQUEDA PARA ESPECIFICAR COMO SE DEBE HACER LA COMPARACION.
</p>

<?php echo CHtml::link('BUSQUEDA AVANZADA','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'alu_rut',
		'alu_email',
		'alu_nombre',
		'alu_apellido_paterno',
		'alu_carrera',
		'pro_rut',
		/*
		'alu_clave',
		'alu_apellido_materno',
		'alu_fono',		
		'alu_informe_curricular',
		'alu_direccion',		
		'jef_rut',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
