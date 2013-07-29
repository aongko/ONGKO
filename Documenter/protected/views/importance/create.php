<?php
/* @var $this ImportanceController */
/* @var $model LtImportance */

$this->breadcrumbs=array(
	'Lt Importances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LtImportance', 'url'=>array('index')),
	array('label'=>'Manage LtImportance', 'url'=>array('admin')),
);
?>

<h1>Create LtImportance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>