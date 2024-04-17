<?php
/* @var $this ExtraCurricularController */
/* @var $data ExtraCurricular */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('extracurricular_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->extracurricular_id), array('view', 'id'=>$data->extracurricular_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_name')); ?>:</b>
	<?php echo CHtml::encode($data->activity_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>