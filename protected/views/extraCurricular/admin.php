<?php
/* @var $this ExtraCurricularController */
/* @var $model ExtraCurricular */

$this->breadcrumbs=array(
	'Extra Curriculars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ExtraCurricular', 'url'=>array('index')),
	array('label'=>'Create ExtraCurricular', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#extra-curricular-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Extra Curriculars</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'extra-curricular-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'extracurricular_id',
		'student_id',
		'activity_name',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
