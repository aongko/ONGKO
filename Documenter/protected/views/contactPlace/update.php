<?php
/* @var $this ContactPlaceController */
/* @var $model LtContactPlace */

$this->breadcrumbs=array(
	'Lt Contact Places'=>array('index'),
	$model->contact_place_id=>array('view','id'=>$model->contact_place_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LtContactPlace', 'url'=>array('index')),
	array('label'=>'Create LtContactPlace', 'url'=>array('create')),
	array('label'=>'View LtContactPlace', 'url'=>array('view', 'id'=>$model->contact_place_id)),
	array('label'=>'Manage LtContactPlace', 'url'=>array('admin')),
);
?>

<h1>Update LtContactPlace <?php echo $model->contact_place_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>