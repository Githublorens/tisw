<?php
/* @var $this AvanceController */
/* @var $model Avance */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_propuesta'); ?>
		<?php echo $form->textField($model,'id_propuesta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ava_ruta'); ?>
		<?php echo $form->textField($model,'ava_ruta',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ava_comentario'); ?>
		<?php echo $form->textArea($model,'ava_comentario',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ava_titulo'); ?>
		<?php echo $form->textField($model,'ava_titulo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tesis'); ?>
		<?php echo $form->textField($model,'id_tesis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->