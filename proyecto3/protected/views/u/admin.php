<?php
/* @var $this UController */
/* @var $model User */


$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Gestion de Usuarios',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>GESTION DE USUARIOS</h1>

<p>
Tambi�n puede escribir un operador de comparaci�n (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de b�squeda para especificar c�mo se debe hacer la comparaci�n.
</p>

<?php echo CHtml::link('B�squeda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">


<?php
$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Nuevo Usuario', 'url'=>array('create')),
);

 $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>


</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
