<?php
/* @var $this ExtraCurricularController */
/* @var $model ExtraCurricular */

$this->breadcrumbs=array(
	'Extra Curriculars'=>array('index'),
	$model->extracurricular_id=>array('view','id'=>$model->extracurricular_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExtraCurricular', 'url'=>array('index')),
	array('label'=>'Create ExtraCurricular', 'url'=>array('create')),
	array('label'=>'View ExtraCurricular', 'url'=>array('view', 'id'=>$model->extracurricular_id)),
	array('label'=>'Manage ExtraCurricular', 'url'=>array('admin')),
);
?>

<h1>Update ExtraCurricular <?php echo $model->extracurricular_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>