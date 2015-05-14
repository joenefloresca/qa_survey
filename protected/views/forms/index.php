<?php
/* @var $this FormsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Forms',
);


$this->menu=array(
	array('label'=>'Create Forms', 'url'=>array('create')),
	array('label'=>'Manage Forms', 'url'=>array('admin')),
);
?>

<h1>Forms</h1>
<form method="get">
<input type="search" placeholder="search" name="q"

value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ;

?>" />
<input type="submit" value="search" />
</form>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
