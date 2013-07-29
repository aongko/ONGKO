<?php
/* @var $this LocationController */
/* @var $model MsLocation */

$this->breadcrumbs=array(
	'Ms Locations'=>array('index'),
	$model->location_id,
);

$this->menu=array(
	array('label'=>'List MsLocation', 'url'=>array('index')),
	array('label'=>'Create MsLocation', 'url'=>array('create')),
	array('label'=>'Update MsLocation', 'url'=>array('update', 'id'=>$model->location_id)),
	array('label'=>'Delete MsLocation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->location_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsLocation', 'url'=>array('admin')),
);
?>

<h1>View MsLocation #<?php echo $model->location_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'location_id',
		'location_name',
		'remarks',
		'city_id',
	),
)); ?>
