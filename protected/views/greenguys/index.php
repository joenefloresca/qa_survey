<?php
/* @var $this GreenguysController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Greenguys',
);

$this->menu=array(
	array('label'=>'Create Greenguys', 'url'=>array('create')),
	array('label'=>'Manage Greenguys', 'url'=>array('admin')),
);
?>

<h1>Greenguys</h1>
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
        <option value="ProcessedBy">Processed By</option>
</select>
<input type="submit" value="Search" />
</form>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
