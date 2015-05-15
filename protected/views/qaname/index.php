<?php
/* @var $this QanameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Qanames',
);

$this->menu=array(
	array('label'=>'Create Qaname', 'url'=>array('create')),
	array('label'=>'Manage Qaname', 'url'=>array('admin')),
);
?>

<h1>Qanames</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
