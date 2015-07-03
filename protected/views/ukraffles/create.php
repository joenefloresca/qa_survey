<?php
/* @var $this UkrafflesController */
/* @var $model Ukraffles */

$this->breadcrumbs=array(
	'Ukraffles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ukraffles', 'url'=>array('index')),
	array('label'=>'Manage Ukraffles', 'url'=>array('admin')),
);
?>

<h1>Create Ukraffles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>