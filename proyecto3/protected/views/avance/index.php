<?php
/* @var $this AvanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Avances',
);

$this->menu=array(
	array('label'=>'Create Avance', 'url'=>array('create')),
	array('label'=>'Manage Avance', 'url'=>array('admin')),
);
?>

<h1>Avances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
