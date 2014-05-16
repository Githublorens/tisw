<?php

$this->breadcrumbs=array(
	'Avances'=>array('index'),
	$model->id_tesis,
);

$this->menu=array(
	array('label'=>'List Avance', 'url'=>array('index'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('alumno')),
	array('label'=>'Create Avance', 'url'=>array('create')),
	array('label'=>'Update Avance', 'url'=>array('update', 'id'=>$model->id_propuesta)),
	array('label'=>'Delete Avance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_propuesta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Avance', 'url'=>array('admin'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('alumno')),
);
?>

<h1>View Avance #<?php echo $model->id_propuesta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_propuesta',
		'ava_ruta',
		'ava_comentario',
		'ava_titulo',
		'id_tesis',
	),
));
 ?>
