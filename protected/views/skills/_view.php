<?php
/* @var $this SkillsController */
/* @var $data Skills */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('skill_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->skill_id), array('view', 'id'=>$data->skill_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skill_name')); ?>:</b>
	<?php echo CHtml::encode($data->skill_name); ?>
	<br />


</div>