<?php
/* @var $this ImportanceController */
/* @var $data LtImportance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('importance_level_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->importance_level_id), array('view', 'id'=>$data->importance_level_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />


</div>