<?php
/* @var $this StuffStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lt Stuff Statuses',
);

$this->menu=array(
	array('label'=>'Create LtStuffStatus', 'url'=>array('create')),
	array('label'=>'Manage LtStuffStatus', 'url'=>array('admin')),
);
?>

<h1>Lt Stuff Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
