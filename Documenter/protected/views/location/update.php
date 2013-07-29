<?php
/* @var $this LocationController */
/* @var $model MsLocation */

$this->breadcrumbs=array(
	'Ms Locations'=>array('index'),
	$model->location_id=>array('view','id'=>$model->location_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsLocation', 'url'=>array('index')),
	array('label'=>'Create MsLocation', 'url'=>array('create')),
	array('label'=>'View MsLocation', 'url'=>array('view', 'id'=>$model->location_id)),
	array('label'=>'Manage MsLocation', 'url'=>array('admin')),
);
?>

<h1>Update MsLocation <?php echo $model->location_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>