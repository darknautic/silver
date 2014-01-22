<?php
/* @var $this ProvidersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Providers',
);

$this->menu=array(
	array('label'=>'Create Providers', 'url'=>array('create')),
	array('label'=>'Manage Providers', 'url'=>array('admin')),
);
?>

<h1>Providers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
