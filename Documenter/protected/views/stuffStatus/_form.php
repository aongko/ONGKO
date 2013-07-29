<?php
/* @var $this StuffStatusController */
/* @var $model LtStuffStatus */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lt-stuff-status-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_status_name'); ?>
		<?php echo $form->textField($model,'staff_status_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'staff_status_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->