<?php
/* @var $this StuffCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lt Stuff Categories',
);

$this->menu=array(
	array('label'=>'Create LtStuffCategory', 'url'=>array('create')),
	array('label'=>'Manage LtStuffCategory', 'url'=>array('admin')),
);
?>

<h1>Lt Stuff Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
