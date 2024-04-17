<?php
/* @var $this StudentDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Student Details',
);

$this->menu=array(
	array('label'=>'Create StudentDetails', 'url'=>array('create')),
	array('label'=>'Manage StudentDetails', 'url'=>array('admin')),
);
?>

<h1>Student Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
