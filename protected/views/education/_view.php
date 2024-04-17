<?php
/* @var $this EducationController */
/* @var $data Education */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('education_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->education_id), array('view', 'id'=>$data->education_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degree')); ?>:</b>
	<?php echo CHtml::encode($data->degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school')); ?>:</b>
	<?php echo CHtml::encode($data->school); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('graduationYear')); ?>:</b>
	<?php echo CHtml::encode($data->graduationYear); ?>
	<br />


</div>