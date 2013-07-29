<?php
/* @var $this StuffCategoryController */
/* @var $model LtStuffCategory */

$this->breadcrumbs=array(
	'Lt Stuff Categories'=>array('index'),
	$model->stuff_category_id=>array('view','id'=>$model->stuff_category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LtStuffCategory', 'url'=>array('index')),
	array('label'=>'Create LtStuffCategory', 'url'=>array('create')),
	array('label'=>'View LtStuffCategory', 'url'=>array('view', 'id'=>$model->stuff_category_id)),
	array('label'=>'Manage LtStuffCategory', 'url'=>array('admin')),
);
?>

<h1>Update LtStuffCategory <?php echo $model->stuff_category_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>