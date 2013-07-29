<?php
/* @var $this ImportanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lt Importances',
);

$this->menu=array(
	array('label'=>'Create LtImportance', 'url'=>array('create')),
	array('label'=>'Manage LtImportance', 'url'=>array('admin')),
);
?>

<h1>Lt Importances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
