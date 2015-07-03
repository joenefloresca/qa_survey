<?php
/* @var $this GreenguysController */
/* @var $model Greenguys */

$this->breadcrumbs=array(
	'Greenguys'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Greenguys', 'url'=>array('index')),
	array('label'=>'Create Greenguys', 'url'=>array('create')),
	array('label'=>'View Greenguys', 'url'=>array('view', 'id'=>$model->id)),
	// array('label'=>'Manage Greenguys', 'url'=>array('admin')),
);
?>

<h1>Update Greenguys <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>