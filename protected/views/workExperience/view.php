<?php
/* @var $this WorkExperienceController */
/* @var $model WorkExperience */

$this->breadcrumbs=array(
	'Work Experiences'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List WorkExperience', 'url'=>array('index')),
	array('label'=>'Create WorkExperience', 'url'=>array('create')),
	array('label'=>'Update WorkExperience', 'url'=>array('update', 'id'=>$model->experience_id)),
	array('label'=>'Delete WorkExperience', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->experience_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkExperience', 'url'=>array('admin')),
);
?>

<h1>View WorkExperience #<?php echo $model->experience_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'experience_id',
		'student_id',
		'title',
		'company',
		'start_date',
		'end_date',
		'description',
	),
)); ?>
