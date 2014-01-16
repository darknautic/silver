<?php
/* @var $this BudgetController */
/* @var $data Budget */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodFrom')); ?>:</b>
	<?php echo CHtml::encode($data->periodFrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodTo')); ?>:</b>
	<?php echo CHtml::encode($data->periodTo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('creationTime')); ?>:</b>
	<?php echo CHtml::encode($data->creationTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creationUser')); ?>:</b>
	<?php echo CHtml::encode($data->creationUser); ?>
	<br />

	*/ ?>

</div>