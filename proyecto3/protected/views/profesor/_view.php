<?php
/* @var $this ProfesorController */
/* @var $data Profesor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_rut), array('view', 'id'=>$data->pro_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_clave')); ?>:</b>
	<?php echo CHtml::encode($data->pro_clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->pro_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_apellido_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->pro_apellido_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_apellido_materno')); ?>:</b>
	<?php echo CHtml::encode($data->pro_apellido_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->pro_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_email')); ?>:</b>
	<?php echo CHtml::encode($data->pro_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_fono')); ?>:</b>
	<?php echo CHtml::encode($data->pro_fono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->pro_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_rut')); ?>:</b>
	<?php echo CHtml::encode($data->adm_rut); ?>
	<br />

	*/ ?>

</div>