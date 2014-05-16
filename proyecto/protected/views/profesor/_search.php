<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pro_rut'); ?>
		<?php echo $form->textField($model,'pro_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_clave'); ?>
		<?php echo $form->textField($model,'pro_clave',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_nombre'); ?>
		<?php echo $form->textField($model,'pro_nombre',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_apellido_paterno'); ?>
		<?php echo $form->textField($model,'pro_apellido_paterno',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_apellido_materno'); ?>
		<?php echo $form->textField($model,'pro_apellido_materno',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_direccion'); ?>
		<?php echo $form->textField($model,'pro_direccion',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_email'); ?>
		<?php echo $form->textField($model,'pro_email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_fono'); ?>
		<?php echo $form->textField($model,'pro_fono',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_tipo'); ?>
		<?php echo $form->textField($model,'pro_tipo',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adm_rut'); ?>
		<?php echo $form->textField($model,'adm_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->