<?php
/* @var $this ContactController */
/* @var $model LtContact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	$model->contact_type_id,
);

$this->menu=array(
	array('label'=>'List Contact', 'url'=>array('index')),
	array('label'=>'Create Contact', 'url'=>array('create')),
	array('label'=>'Update Contact', 'url'=>array('update', 'id'=>$model->contact_type_id)),
	array('label'=>'Delete Contact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->contact_type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contact', 'url'=>array('admin')),
);
?>

<h1>View Contact #<?php echo $model->contact_type_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'contact_type_id',
		'contact_type',
	),
)); ?>