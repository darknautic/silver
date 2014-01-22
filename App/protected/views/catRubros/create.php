<?php
/* @var $this CatRubrosController */
/* @var $model CatRubros */

$this->breadcrumbs=array(
	'Cat Rubroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatRubros', 'url'=>array('index')),
	array('label'=>'Manage CatRubros', 'url'=>array('admin')),
);
?>

<h1>Create CatRubros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>