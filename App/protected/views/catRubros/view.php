<?php
/* @var $this CatRubrosController */
/* @var $model CatRubros */

$this->breadcrumbs=array(
	'Cat Rubroses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatRubros', 'url'=>array('index')),
	array('label'=>'Create CatRubros', 'url'=>array('create')),
	array('label'=>'Update CatRubros', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatRubros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatRubros', 'url'=>array('admin')),
);
?>

<h1>View CatRubros #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'status',
	),
)); ?>
