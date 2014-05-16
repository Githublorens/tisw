<?php
/* @var $this AlumController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Alumno'); ?>
		<?php echo $form->textField($model,'alu_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'alu_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clave'); ?>
		<?php echo $form->textField($model,'alu_clave',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alu_clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'alu_nombre',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'alu_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido Paterno'); ?>
		<?php echo $form->textField($model,'alu_apellido_paterno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'alu_apellido_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido Materno'); ?>
		<?php echo $form->textField($model,'alu_apellido_materno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'alu_apellido_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'alu_direccion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'alu_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'alu_email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'alu_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fono'); ?>
		<?php echo $form->textField($model,'alu_fono',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'alu_fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Carrera'); ?>
		<?php echo $form->textField($model,'alu_carrera',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'alu_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Informe Curricular'); ?>
		<?php echo $form->textField($model,'alu_informe_curricular',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alu_informe_curricular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Profesor'); ?>
		<?php echo $form->textField($model,'pro_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'pro_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Jefe Carrera'); ?>
		<?php echo $form->textField($model,'jef_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'jef_rut'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar'  : 'Save', array('class' => 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->