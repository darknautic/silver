<?php
/* @var $this CatPartidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Partidases',
);

$this->menu=array(
	array('label'=>'Create CatPartidas', 'url'=>array('create')),
	array('label'=>'Manage CatPartidas', 'url'=>array('admin')),
);
?>

<h1>Cat Partidases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
