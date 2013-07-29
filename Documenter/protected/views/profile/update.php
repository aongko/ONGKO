<?php
/* @var $this ProfileController */
/* @var $model MsProfile */

$this->breadcrumbs=array(
	'Ms Profiles'=>array('index'),
	$model->profile_id=>array('view','id'=>$model->profile_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsProfile', 'url'=>array('index')),
	array('label'=>'Create MsProfile', 'url'=>array('create')),
	array('label'=>'View MsProfile', 'url'=>array('view', 'id'=>$model->profile_id)),
	array('label'=>'Manage MsProfile', 'url'=>array('admin')),
);
?>

<h1>Update MsProfile <?php echo $model->profile_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>