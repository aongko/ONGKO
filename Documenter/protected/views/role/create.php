<?php
/* @var $this RoleController */
/* @var $model LtRole */

$this->breadcrumbs=array(
	'Lt Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LtRole', 'url'=>array('index')),
	array('label'=>'Manage LtRole', 'url'=>array('admin')),
);
?>

<h1>Create LtRole</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>