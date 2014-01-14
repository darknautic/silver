<?php
/* @var $this GreetsController */
/* @var $model Greets */

$this->breadcrumbs=array(
	'Greets'=>array('index'),
	$model->greetFrom,
);

$this->menu=array(
	array('label'=>'List Greets', 'url'=>array('index')),
	array('label'=>'Create Greets', 'url'=>array('create')),
	array('label'=>'Update Greets', 'url'=>array('update', 'id'=>$model->greetFrom)),
	array('label'=>'Delete Greets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->greetFrom),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Greets', 'url'=>array('admin')),
);
?>

<h1>View Greets #<?php echo $model->greetFrom; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'greetFrom',
		'greetTo',
		'greetText',
	),
)); ?>
