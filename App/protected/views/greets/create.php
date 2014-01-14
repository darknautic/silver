<?php
/* @var $this GreetsController */
/* @var $model Greets */

$this->breadcrumbs=array(
	'Greets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Greets', 'url'=>array('index')),
	array('label'=>'Manage Greets', 'url'=>array('admin')),
);
?>

<h1>Create Greets</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>