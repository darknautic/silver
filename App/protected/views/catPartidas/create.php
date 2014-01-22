<?php
/* @var $this CatPartidasController */
/* @var $model CatPartidas */

$this->breadcrumbs=array(
	'Cat Partidases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatPartidas', 'url'=>array('index')),
	array('label'=>'Manage CatPartidas', 'url'=>array('admin')),
);
?>

<h1>Create CatPartidas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>