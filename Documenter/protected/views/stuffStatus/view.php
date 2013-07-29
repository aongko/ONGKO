<?php
/* @var $this StuffStatusController */
/* @var $model LtStuffStatus */

$this->breadcrumbs=array(
	'Lt Stuff Statuses'=>array('index'),
	$model->stuff_status_id,
);

$this->menu=array(
	array('label'=>'List LtStuffStatus', 'url'=>array('index')),
	array('label'=>'Create LtStuffStatus', 'url'=>array('create')),
	array('label'=>'Update LtStuffStatus', 'url'=>array('update', 'id'=>$model->stuff_status_id)),
	array('label'=>'Delete LtStuffStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stuff_status_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LtStuffStatus', 'url'=>array('admin')),
);
?>

<h1>View LtStuffStatus #<?php echo $model->stuff_status_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stuff_status_id',
		'staff_status_name',
		'remarks',
	),
)); ?>
