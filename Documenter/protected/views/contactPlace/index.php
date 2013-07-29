<?php
/* @var $this ContactPlaceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lt Contact Places',
);

$this->menu=array(
	array('label'=>'Create LtContactPlace', 'url'=>array('create')),
	array('label'=>'Manage LtContactPlace', 'url'=>array('admin')),
);
?>

<h1>Lt Contact Places</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
