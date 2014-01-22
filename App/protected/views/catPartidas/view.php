<?php
/* @var $this CatPartidasController */
/* @var $model CatPartidas */

$this->breadcrumbs=array(
	'Cat Partidases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatPartidas', 'url'=>array('index')),
	array('label'=>'Create CatPartidas', 'url'=>array('create')),
	array('label'=>'Update CatPartidas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatPartidas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatPartidas', 'url'=>array('admin')),
);
?>

<h1>View CatPartidas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'status',
	),
)); ?>
