<?php
/* @var $this FormsController */
/* @var $model Forms */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Forms', 'url'=>array('index')),
	array('label'=>'Create Forms', 'url'=>array('create')),
	array('label'=>'View Forms', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Forms', 'url'=>array('admin')),
);
?>

<h1>Update Forms <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>