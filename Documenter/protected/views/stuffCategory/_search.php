<?php
/* @var $this StuffCategoryController */
/* @var $model LtStuffCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'stuff_category_id'); ?>
		<?php echo $form->textField($model,'stuff_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stuff_category_name'); ?>
		<?php echo $form->textField($model,'stuff_category_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importance_level_id'); ?>
		<?php echo $form->textField($model,'importance_level_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->