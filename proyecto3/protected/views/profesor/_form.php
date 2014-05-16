<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Profesor'); ?>
		<?php echo $form->textField($model,'pro_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'pro_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clave'); ?>
		<?php echo $form->textField($model,'pro_clave',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pro_clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'pro_nombre',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pro_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido Paterno'); ?>
		<?php echo $form->textField($model,'pro_apellido_paterno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pro_apellido_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido Materno'); ?>
		<?php echo $form->textField($model,'pro_apellido_materno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pro_apellido_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'pro_direccion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pro_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo'); ?>
		<?php echo $form->textField($model,'pro_email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pro_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fono'); ?>
		<?php echo $form->textField($model,'pro_fono',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'pro_fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->textField($model,'pro_tipo',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pro_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Administrador'); ?>
		<?php echo $form->textField($model,'adm_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'adm_rut'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Save', array('class' => 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->