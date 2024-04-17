<?php
/* @var $this WorkExperienceController */
/* @var $model WorkExperience */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'work-experience-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'attribute' => 'start_date',
        'options' => array(
            'dateFormat' => 'yy-mm-dd',
            // Additional options for the date picker
            // 'showButtonPanel' => true,
            // ... more options as needed
        ),
        'htmlOptions' => array(
            'class' => 'form-control',
        ),
    )); ?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'attribute' => 'end_date',
        'options' => array(
            'dateFormat' => 'yy-mm-dd',
            // Additional options for the date picker
            // 'showButtonPanel' => true,
            // ... more options as needed
        ),
        'htmlOptions' => array(
            'class' => 'form-control',
        ),
    )); ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->