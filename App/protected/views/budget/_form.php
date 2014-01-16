<?php
/* @var $this BudgetController */
/* @var $model Budget */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'budget-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>28,'maxlength'=>28)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodFrom'); ?>
		<?php echo $form->textField($model,'periodFrom'); ?>
		<?php echo $form->error($model,'periodFrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodTo'); ?>
		<?php echo $form->textField($model,'periodTo'); ?>
		<?php echo $form->error($model,'periodTo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creationTime'); ?>
		<?php echo $form->textField($model,'creationTime'); ?>
		<?php echo $form->error($model,'creationTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creationUser'); ?>
		<?php echo $form->textField($model,'creationUser'); ?>
		<?php echo $form->error($model,'creationUser'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->