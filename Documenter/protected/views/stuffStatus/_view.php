<?php
/* @var $this StuffStatusController */
/* @var $data LtStuffStatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('stuff_status_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stuff_status_id), array('view', 'id'=>$data->stuff_status_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_status_name')); ?>:</b>
	<?php echo CHtml::encode($data->staff_status_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />


</div>