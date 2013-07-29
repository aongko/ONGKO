<?php
/* @var $this StuffStatusController */
/* @var $model LtStuffStatus */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'stuff_status_id'); ?>
		<?php echo $form->textField($model,'stuff_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_status_name'); ?>
		<?php echo $form->textField($model,'staff_status_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->