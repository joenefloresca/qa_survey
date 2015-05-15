<?php
/* @var $this QanameController */
/* @var $model Qaname */

$this->breadcrumbs=array(
	'Qanames'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Qaname', 'url'=>array('index')),
	array('label'=>'Manage Qaname', 'url'=>array('admin')),
);
?>

<h1>Create Qaname</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>