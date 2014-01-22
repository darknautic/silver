<?php
/* @var $this CatRubrosController */
/* @var $model CatRubros */

$this->breadcrumbs=array(
	'Cat Rubroses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatRubros', 'url'=>array('index')),
	array('label'=>'Create CatRubros', 'url'=>array('create')),
	array('label'=>'View CatRubros', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatRubros', 'url'=>array('admin')),
);
?>

<h1>Update CatRubros <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>