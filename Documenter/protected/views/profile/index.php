<?php
/* @var $this ProfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ms Profiles',
);

$this->menu=array(
	array('label'=>'Create MsProfile', 'url'=>array('create')),
	array('label'=>'Manage MsProfile', 'url'=>array('admin')),
);
?>

<h1>Ms Profiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
