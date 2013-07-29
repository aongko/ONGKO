<?php
/* @var $this ContactPlaceController */
/* @var $model LtContactPlace */

$this->breadcrumbs=array(
	'Lt Contact Places'=>array('index'),
	$model->contact_place_id,
);

$this->menu=array(
	array('label'=>'List LtContactPlace', 'url'=>array('index')),
	array('label'=>'Create LtContactPlace', 'url'=>array('create')),
	array('label'=>'Update LtContactPlace', 'url'=>array('update', 'id'=>$model->contact_place_id)),
	array('label'=>'Delete LtContactPlace', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->contact_place_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LtContactPlace', 'url'=>array('admin')),
);
?>

<h1>View LtContactPlace #<?php echo $model->contact_place_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'contact_place_id',
		'contact_place',
	),
)); ?>
