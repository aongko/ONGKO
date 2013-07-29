<?php
/* @var $this RoleController */
/* @var $model LtRole */

$this->breadcrumbs=array(
	'Lt Roles'=>array('index'),
	$model->role_id=>array('view','id'=>$model->role_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LtRole', 'url'=>array('index')),
	array('label'=>'Create LtRole', 'url'=>array('create')),
	array('label'=>'View LtRole', 'url'=>array('view', 'id'=>$model->role_id)),
	array('label'=>'Manage LtRole', 'url'=>array('admin')),
);
?>

<h1>Update LtRole <?php echo $model->role_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>