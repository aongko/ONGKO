<?php
/* @var $this StuffStatusController */
/* @var $model LtStuffStatus */

$this->breadcrumbs=array(
	'Lt Stuff Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LtStuffStatus', 'url'=>array('index')),
	array('label'=>'Manage LtStuffStatus', 'url'=>array('admin')),
);
?>

<h1>Create LtStuffStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>