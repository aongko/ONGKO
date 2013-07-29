<?php
/* @var $this RoleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lt Roles',
);

$this->menu=array(
	array('label'=>'Create LtRole', 'url'=>array('create')),
	array('label'=>'Manage LtRole', 'url'=>array('admin')),
);
?>

<h1>Lt Roles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
