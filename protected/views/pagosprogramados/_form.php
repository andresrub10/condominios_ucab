<?php
/* @var $this PagosprogramadosController */
/* @var $model Pagosprogramados */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagosprogramados-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MontoPorApartamento'); ?>
		<?php echo $form->textField($model,'MontoPorApartamento'); ?>
		<?php echo $form->error($model,'MontoPorApartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edificio_RIF'); ?>
		<?php echo $form->dropDownList($model,'Edificio_RIF',array(NULL => 'selecciona edificio')+$edificios); ?>
		<?php echo $form->error($model,'Edificio_RIF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->