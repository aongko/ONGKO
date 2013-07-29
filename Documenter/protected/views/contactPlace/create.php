<?php
/* @var $this ContactPlaceController */
/* @var $model LtContactPlace */

$this->breadcrumbs=array(
	'Lt Contact Places'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LtContactPlace', 'url'=>array('index')),
	array('label'=>'Manage LtContactPlace', 'url'=>array('admin')),
);
?>

<h1>Create LtContactPlace</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>