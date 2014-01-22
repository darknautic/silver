<?php
/* @var $this CatRubrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Rubroses',
);

$this->menu=array(
	array('label'=>'Create CatRubros', 'url'=>array('create')),
	array('label'=>'Manage CatRubros', 'url'=>array('admin')),
);
?>

<h1>Cat Rubroses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
