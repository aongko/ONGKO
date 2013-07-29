<?php
/* @var $this ProfileController */
/* @var $model MsProfile */

$this->breadcrumbs=array(
	'Ms Profiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MsProfile', 'url'=>array('index')),
	array('label'=>'Manage MsProfile', 'url'=>array('admin')),
);
?>

<h1>Create MsProfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>