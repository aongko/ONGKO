<?php
/* @var $this ContactController */
/* @var $model LtContact */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'contact_type_id'); ?>
		<?php echo $form->textField($model,'contact_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_type'); ?>
		<?php echo $form->textField($model,'contact_type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->