<?php
/* @var $this QanameController */
/* @var $model Qaname */

$this->breadcrumbs=array(
	'Qanames'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List Qaname', 'url'=>array('index')),
	array('label'=>'Create Qaname', 'url'=>array('create')),
	array('label'=>'Update Qaname', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Delete Qaname', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Qaname', 'url'=>array('admin')),
);
?>

<h1>View Qaname #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'password',
		'id',
		'level',
	),
)); ?>
