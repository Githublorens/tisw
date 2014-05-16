<?php
/* @var $this AlumController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->alu_rut), array('view', 'id'=>$data->alu_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_clave')); ?>:</b>
	<?php echo CHtml::encode($data->alu_clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->alu_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_apellido_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->alu_apellido_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_apellido_materno')); ?>:</b>
	<?php echo CHtml::encode($data->alu_apellido_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->alu_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_email')); ?>:</b>
	<?php echo CHtml::encode($data->alu_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_fono')); ?>:</b>
	<?php echo CHtml::encode($data->alu_fono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->alu_carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_informe_curricular')); ?>:</b>
	<?php echo CHtml::encode($data->alu_informe_curricular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_rut')); ?>:</b>
	<?php echo CHtml::encode($data->pro_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jef_rut')); ?>:</b>
	<?php echo CHtml::encode($data->jef_rut); ?>
	<br />

	*/ ?>

</div>