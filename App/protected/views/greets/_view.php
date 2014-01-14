<?php
/* @var $this GreetsController */
/* @var $data Greets */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('greetFrom')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->greetFrom), array('view', 'id'=>$data->greetFrom)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('greetTo')); ?>:</b>
	<?php echo CHtml::encode($data->greetTo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('greetText')); ?>:</b>
	<?php echo CHtml::encode($data->greetText); ?>
	<br />


</div>