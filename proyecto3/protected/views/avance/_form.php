<?php
/* @var $this AvanceController */
/* @var $model Avance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'avance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'ava_titulo'); ?>
		<?php echo $form->textField($model,'ava_titulo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ava_titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ava_comentario'); ?>
		<?php echo $form->textArea($model,'ava_comentario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ava_comentario'); ?>
	</div>

	<div class="row">
		<?php
    $this->widget('ext.coco.CocoWidget'
        ,array(
            'id'=>'cocowidget1',
            'onCompleted'=>'function(id,filename,jsoninfo){  }',
            'onCancelled'=>'function(id,filename){ alert("cancelled"); }',
            'onMessage'=>'function(m){ alert(m); }',
            'allowedExtensions'=>array('jpeg','jpg','gif','png','txt','xlsx'),
            'sizeLimit'=>2000000,
            'uploadDir' => 'assets/'.yii::app()->user->id.'/',
            // para recibir el archivo subido:
            'receptorClassName'=>'application.models.Avance',
            'methodName'=>'onFileUploaded',
            'userdata'=>$model->primaryKey,
        ));
   ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->