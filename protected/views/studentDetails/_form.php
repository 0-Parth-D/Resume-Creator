<?php
/* @var $this StudentDetailsController */
/* @var $model StudentDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cell_number'); ?>
		<?php echo $form->textField($model,'cell_number'); ?>
		<?php echo $form->error($model,'cell_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dept_id'); ?>
		<?php echo $form->dropDownList($model, 'dept_id', $departments, array('prompt' => 'Select Department')); ?>
		<?php echo $form->error($model,'dept_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program_id'); ?>
		<?php echo $form->dropDownList($model, 'program_id', $programs, array('prompt' => 'Select Program')); ?>
		<?php echo $form->error($model,'program_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->