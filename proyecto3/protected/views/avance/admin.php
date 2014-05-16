<?php
/* @var $this AvanceController */
/* @var $model Avance */

$this->breadcrumbs=array(
	'Avances'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Avance', 'url'=>array('index'), Yii::app()->user->checkAccess('alumno')),
	array('label'=>'Create Avance', 'url'=>array('create'),Yii::app()->user->checkAccess('alumno')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#avance-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Avances</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'avance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_propuesta',
		'ava_ruta',
		'ava_comentario',
		'ava_titulo',
		'id_tesis',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
