<?php
/* @var $this ProvidersController */
/* @var $model Providers */

$this->breadcrumbs=array(
	'Providers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Providers', 'url'=>array('index')),
	array('label'=>'Manage Providers', 'url'=>array('admin')),
);
?>

<h1>Create Providers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>