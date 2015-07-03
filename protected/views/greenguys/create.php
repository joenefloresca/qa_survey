<?php
/* @var $this GreenguysController */
/* @var $model Greenguys */

$this->breadcrumbs=array(
	'Greenguys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Greenguys', 'url'=>array('index')),
	array('label'=>'Manage Greenguys', 'url'=>array('admin')),
);
?>

<h1>Create Greenguys</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>