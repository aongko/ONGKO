<?php
/* @var $this StuffCategoryController */
/* @var $model LtStuffCategory */

$this->breadcrumbs=array(
	'Lt Stuff Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LtStuffCategory', 'url'=>array('index')),
	array('label'=>'Manage LtStuffCategory', 'url'=>array('admin')),
);
?>

<h1>Create LtStuffCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>