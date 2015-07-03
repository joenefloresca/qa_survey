<?php
/* @var $this UkrafflesController */
/* @var $model Ukraffles */

$this->breadcrumbs=array(
	'Ukraffles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ukraffles', 'url'=>array('index')),
	array('label'=>'Create Ukraffles', 'url'=>array('create')),
	array('label'=>'View Ukraffles', 'url'=>array('view', 'id'=>$model->id)),
	// array('label'=>'Manage Ukraffles', 'url'=>array('admin')),
);
?>

<h1>Update Ukraffles <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>