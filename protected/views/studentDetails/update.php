<?php
/* @var $this StudentDetailsController */
/* @var $model StudentDetails */

$this->breadcrumbs=array(
	'Student Details'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentDetails', 'url'=>array('index')),
	array('label'=>'Create StudentDetails', 'url'=>array('create')),
	array('label'=>'View StudentDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StudentDetails', 'url'=>array('admin')),
);
?>

<h1>Update StudentDetails <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>