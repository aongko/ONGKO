<?php
/* @var $this ContactPlaceController */
/* @var $data LtContactPlace */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_place_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contact_place_id), array('view', 'id'=>$data->contact_place_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_place')); ?>:</b>
	<?php echo CHtml::encode($data->contact_place); ?>
	<br />


</div>