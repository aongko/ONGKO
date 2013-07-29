<?php
/* @var $this ContactPlaceController */
/* @var $model LtContactPlace */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'contact_place_id'); ?>
		<?php echo $form->textField($model,'contact_place_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_place'); ?>
		<?php echo $form->textField($model,'contact_place',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->