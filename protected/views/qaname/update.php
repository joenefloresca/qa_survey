<?php
/* @var $this QanameController */
/* @var $model Qaname */

$this->breadcrumbs=array(
	'Qanames'=>array('index'),
	$model->username=>array('view','id'=>$model->username),
	'Update',
);

$this->menu=array(
	array('label'=>'List Qaname', 'url'=>array('index')),
	array('label'=>'Create Qaname', 'url'=>array('create')),
	array('label'=>'View Qaname', 'url'=>array('view', 'id'=>$model->username)),
	array('label'=>'Manage Qaname', 'url'=>array('admin')),
);
?>

<h1>Update Qaname <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>