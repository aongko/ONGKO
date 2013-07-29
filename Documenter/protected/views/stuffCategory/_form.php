<?php
/* @var $this StuffCategoryController */
/* @var $model LtStuffCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lt-stuff-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'stuff_category_name'); ?>
		<?php echo $form->textField($model,'stuff_category_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'stuff_category_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importance_level_id'); ?>
		<?php echo $form->textField($model,'importance_level_id'); ?>
		<?php echo $form->error($model,'importance_level_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->