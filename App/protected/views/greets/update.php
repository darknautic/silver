<?php
/* @var $this GreetsController */
/* @var $model Greets */

$this->breadcrumbs=array(
	'Greets'=>array('index'),
	$model->greetFrom=>array('view','id'=>$model->greetFrom),
	'Update',
);

$this->menu=array(
	array('label'=>'List Greets', 'url'=>array('index')),
	array('label'=>'Create Greets', 'url'=>array('create')),
	array('label'=>'View Greets', 'url'=>array('view', 'id'=>$model->greetFrom)),
	array('label'=>'Manage Greets', 'url'=>array('admin')),
);
?>

<h1>Update Greets <?php echo $model->greetFrom; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>