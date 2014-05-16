<?php
/* @var $this AvanceController */
/* @var $data Avance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tesis')); ?>:</b>
	<?php 
	echo CHtml::link(CHtml::encode($data->id_propuesta), array('view', 'id'=>$data->id_tesis)); 
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ava_ruta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ava_ruta),CHtml::encode($data->ava_ruta).'/'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ava_comentario')); ?>:</b>
	<?php echo CHtml::encode($data->ava_comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ava_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->ava_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tesis')); ?>:</b>
	<?php echo CHtml::encode($data->id_tesis); ?>
	<br />


</div>