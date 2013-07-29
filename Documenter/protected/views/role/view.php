<?php
/* @var $this RoleController */
/* @var $model LtRole */

$this->breadcrumbs=array(
	'Lt Roles'=>array('index'),
	$model->role_id,
);

$this->menu=array(
	array('label'=>'List LtRole', 'url'=>array('index')),
	array('label'=>'Create LtRole', 'url'=>array('create')),
	array('label'=>'Update LtRole', 'url'=>array('update', 'id'=>$model->role_id)),
	array('label'=>'Delete LtRole', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->role_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LtRole', 'url'=>array('admin')),
);
?>

<h1>View LtRole #<?php echo $model->role_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'role_id',
		'role_name',
		'privilege_id',
	),
)); ?>
