<?php
/* @var $this AvanceController */
/* @var $model Avance */

$this->breadcrumbs=array(
	'Avances'=>array('index'),
	$model->id_propuesta=>array('view','id'=>$model->id_propuesta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Avance', 'url'=>array('index')),
	array('label'=>'Create Avance', 'url'=>array('create')),
	array('label'=>'View Avance', 'url'=>array('view', 'id'=>$model->id_propuesta)),
	array('label'=>'Manage Avance', 'url'=>array('admin')),
);
?>

<h1>Update Avance <?php echo $model->id_propuesta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>