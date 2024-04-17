<?php
/* @var $this WorkExperienceController */
/* @var $model WorkExperience */

$this->breadcrumbs=array(
	'Work Experiences'=>array('index'),
	$model->title=>array('view','id'=>$model->experience_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkExperience', 'url'=>array('index')),
	array('label'=>'Create WorkExperience', 'url'=>array('create')),
	array('label'=>'View WorkExperience', 'url'=>array('view', 'id'=>$model->experience_id)),
	array('label'=>'Manage WorkExperience', 'url'=>array('admin')),
);
?>

<h1>Update WorkExperience <?php echo $model->experience_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>