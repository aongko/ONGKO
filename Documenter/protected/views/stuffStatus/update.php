<?php
/* @var $this StuffStatusController */
/* @var $model LtStuffStatus */

$this->breadcrumbs=array(
	'Lt Stuff Statuses'=>array('index'),
	$model->stuff_status_id=>array('view','id'=>$model->stuff_status_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LtStuffStatus', 'url'=>array('index')),
	array('label'=>'Create LtStuffStatus', 'url'=>array('create')),
	array('label'=>'View LtStuffStatus', 'url'=>array('view', 'id'=>$model->stuff_status_id)),
	array('label'=>'Manage LtStuffStatus', 'url'=>array('admin')),
);
?>

<h1>Update LtStuffStatus <?php echo $model->stuff_status_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>