<?php
/* @var $this StuffCategoryController */
/* @var $data LtStuffCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('stuff_category_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stuff_category_id), array('view', 'id'=>$data->stuff_category_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stuff_category_name')); ?>:</b>
	<?php echo CHtml::encode($data->stuff_category_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importance_level_id')); ?>:</b>
	<?php echo CHtml::encode($data->importance_level_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />


</div>