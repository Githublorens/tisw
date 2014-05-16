<?php
/* @var $this AlumController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'alu_rut'); ?>
		<?php echo $form->textField($model,'alu_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_clave'); ?>
		<?php echo $form->textField($model,'alu_clave',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_nombre'); ?>
		<?php echo $form->textField($model,'alu_nombre',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_apellido_paterno'); ?>
		<?php echo $form->textField($model,'alu_apellido_paterno',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_apellido_materno'); ?>
		<?php echo $form->textField($model,'alu_apellido_materno',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_direccion'); ?>
		<?php echo $form->textField($model,'alu_direccion',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_email'); ?>
		<?php echo $form->textField($model,'alu_email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_fono'); ?>
		<?php echo $form->textField($model,'alu_fono',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_carrera'); ?>
		<?php echo $form->textField($model,'alu_carrera',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alu_informe_curricular'); ?>
		<?php echo $form->textField($model,'alu_informe_curricular',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_rut'); ?>
		<?php echo $form->textField($model,'pro_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jef_rut'); ?>
		<?php echo $form->textField($model,'jef_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->