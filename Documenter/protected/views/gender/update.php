<?php
/* @var $this GenderController */
/* @var $model LtGender */

$this->breadcrumbs=array(
	'Genders'=>array('index'),
	$model->gender_id=>array('view','id'=>$model->gender_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gender', 'url'=>array('index')),
	array('label'=>'Create Gender', 'url'=>array('create')),
	array('label'=>'View Gender', 'url'=>array('view', 'id'=>$model->gender_id)),
	array('label'=>'Manage Gender', 'url'=>array('admin')),
);
?>

<h1>Update Gender <?php echo $model->gender_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>