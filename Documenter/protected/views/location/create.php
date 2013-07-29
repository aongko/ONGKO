<?php
/* @var $this LocationController */
/* @var $model MsLocation */

$this->breadcrumbs=array(
	'Ms Locations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MsLocation', 'url'=>array('index')),
	array('label'=>'Manage MsLocation', 'url'=>array('admin')),
);
?>

<h1>Create MsLocation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>