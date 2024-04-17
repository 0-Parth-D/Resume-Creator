<?php
/* @var $this ExtraCurricularController */
/* @var $model ExtraCurricular */

$this->breadcrumbs=array(
	'Extra Curriculars'=>array('index'),
	$model->extracurricular_id,
);

$this->menu=array(
	array('label'=>'List ExtraCurricular', 'url'=>array('index')),
	array('label'=>'Create ExtraCurricular', 'url'=>array('create')),
	array('label'=>'Update ExtraCurricular', 'url'=>array('update', 'id'=>$model->extracurricular_id)),
	array('label'=>'Delete ExtraCurricular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->extracurricular_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExtraCurricular', 'url'=>array('admin')),
);
?>

<h1>View ExtraCurricular #<?php echo $model->extracurricular_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'extracurricular_id',
		'student_id',
		'activity_name',
		'description',
	),
)); ?>
