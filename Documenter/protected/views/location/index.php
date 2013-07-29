<?php
/* @var $this LocationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ms Locations',
);

$this->menu=array(
	array('label'=>'Create MsLocation', 'url'=>array('create')),
	array('label'=>'Manage MsLocation', 'url'=>array('admin')),
);
?>

<h1>Ms Locations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
