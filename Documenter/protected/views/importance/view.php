<?php
/* @var $this ImportanceController */
/* @var $model LtImportance */

$this->breadcrumbs=array(
	'Lt Importances'=>array('index'),
	$model->importance_level_id,
);

$this->menu=array(
	array('label'=>'List LtImportance', 'url'=>array('index')),
	array('label'=>'Create LtImportance', 'url'=>array('create')),
	array('label'=>'Update LtImportance', 'url'=>array('update', 'id'=>$model->importance_level_id)),
	array('label'=>'Delete LtImportance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->importance_level_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LtImportance', 'url'=>array('admin')),
);
?>

<h1>View LtImportance #<?php echo $model->importance_level_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'importance_level_id',
		'remarks',
	),
)); ?>
