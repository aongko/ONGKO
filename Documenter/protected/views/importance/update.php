<?php
/* @var $this ImportanceController */
/* @var $model LtImportance */

$this->breadcrumbs=array(
	'Lt Importances'=>array('index'),
	$model->importance_level_id=>array('view','id'=>$model->importance_level_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LtImportance', 'url'=>array('index')),
	array('label'=>'Create LtImportance', 'url'=>array('create')),
	array('label'=>'View LtImportance', 'url'=>array('view', 'id'=>$model->importance_level_id)),
	array('label'=>'Manage LtImportance', 'url'=>array('admin')),
);
?>

<h1>Update LtImportance <?php echo $model->importance_level_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>