<?php
/* @var $this GreetsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Greets',
);

$this->menu=array(
	array('label'=>'Create Greets', 'url'=>array('create')),
	array('label'=>'Manage Greets', 'url'=>array('admin')),
);
?>

<h1>Greets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
