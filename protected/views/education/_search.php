<?php
/* @var $this EducationController */
/* @var $model Education */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'education_id'); ?>
		<?php echo $form->textField($model,'education_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'student_id'); ?>
		<?php echo $form->textField($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'degree'); ?>
		<?php echo $form->textField($model,'degree',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school'); ?>
		<?php echo $form->textField($model,'school',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'graduationYear'); ?>
		<?php echo $form->textField($model,'graduationYear'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->