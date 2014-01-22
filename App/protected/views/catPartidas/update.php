<?php
/* @var $this CatPartidasController */
/* @var $model CatPartidas */

$this->breadcrumbs=array(
	'Cat Partidases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatPartidas', 'url'=>array('index')),
	array('label'=>'Create CatPartidas', 'url'=>array('create')),
	array('label'=>'View CatPartidas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatPartidas', 'url'=>array('admin')),
);
?>

<h1>Update CatPartidas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>