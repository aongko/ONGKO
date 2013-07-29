<?php
/* @var $this ContactController */
/* @var $data LtContact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_type_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contact_type_id), array('view', 'id'=>$data->contact_type_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_type')); ?>:</b>
	<?php echo CHtml::encode($data->contact_type); ?>
	<br />


</div>