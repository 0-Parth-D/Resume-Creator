<?php
/* @var $this ExtraCurricularController */
/* @var $model ExtraCurricular */

$this->breadcrumbs=array(
	'Extra Curriculars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExtraCurricular', 'url'=>array('index')),
	array('label'=>'Manage ExtraCurricular', 'url'=>array('admin')),
);
?>

<h1>Create ExtraCurricular</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>