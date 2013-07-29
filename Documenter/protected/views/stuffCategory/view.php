<?php
/* @var $this StuffCategoryController */
/* @var $model LtStuffCategory */

$this->breadcrumbs=array(
	'Lt Stuff Categories'=>array('index'),
	$model->stuff_category_id,
);

$this->menu=array(
	array('label'=>'List LtStuffCategory', 'url'=>array('index')),
	array('label'=>'Create LtStuffCategory', 'url'=>array('create')),
	array('label'=>'Update LtStuffCategory', 'url'=>array('update', 'id'=>$model->stuff_category_id)),
	array('label'=>'Delete LtStuffCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stuff_category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LtStuffCategory', 'url'=>array('admin')),
);
?>

<h1>View LtStuffCategory #<?php echo $model->stuff_category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stuff_category_id',
		'stuff_category_name',
		'importance_level_id',
		'parent_id',
	),
)); ?>
