<?php
/* @var $this ProfileController */
/* @var $model MsProfile */

$this->breadcrumbs=array(
	'Ms Profiles'=>array('index'),
	$model->profile_id,
);

$this->menu=array(
	array('label'=>'List MsProfile', 'url'=>array('index')),
	array('label'=>'Create MsProfile', 'url'=>array('create')),
	array('label'=>'Update MsProfile', 'url'=>array('update', 'id'=>$model->profile_id)),
	array('label'=>'Delete MsProfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->profile_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsProfile', 'url'=>array('admin')),
);
?>

<h1>View MsProfile #<?php echo $model->profile_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'profile_id',
		'user_id',
		'first_name',
		'middle_name',
		'last_name',
		'date_of_birth',
		'city_id',
		'gender_id',
		'religion_id',
	),
)); ?>
