<?php
/* @var $this FormsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Forms',
);


$this->menu=array(
	array('label'=>'Create Forms', 'url'=>array('create')),
	//array('label'=>'Manage Forms', 'url'=>array('admin')),
);
?>

<h1>Forms</h1>
<form method="get">
<input type="search" placeholder="Search Record" name="q"

value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ;

?>" />
<select name="filter" id="filter" >
        <option value="">Choose Filter</option>
        <option value="ID">ID</option>
        <option value="AgentName">Agent Name</option>
        <option value="TeamLeaderManager">Team Leader Manager</option>
        <option value="DateTime">Date Time</option>
        <option value="EvaluatedBy">Evaluated By</option>
        <option value="PhoneNumber">Phone Number</option>
</select>
<input type="submit" value="Search" />
</form>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
