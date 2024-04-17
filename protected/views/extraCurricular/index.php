<?php
/* @var $this ExtraCurricularController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Extra Curriculars',
);

$this->menu=array(
	array('label'=>'Create ExtraCurricular', 'url'=>array('create')),
	array('label'=>'Manage ExtraCurricular', 'url'=>array('admin')),
);
?>

<h1>Extra Curriculars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
