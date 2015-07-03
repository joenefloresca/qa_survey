<?php
/* @var $this GreenguysController */
/* @var $model Greenguys */

$this->breadcrumbs=array(
	'Greenguys'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Greenguys', 'url'=>array('index')),
	array('label'=>'Create Greenguys', 'url'=>array('create')),
	array('label'=>'Update Greenguys', 'url'=>array('update', 'id'=>$model->id)),
	// array('label'=>'Delete Greenguys', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Greenguys', 'url'=>array('admin')),
);
?>

<h1>View Greenguys #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'AgentName',
		'TeamLeaderManager',
		'Campaign',
		'DateTime',
		'EvaluatedBy',
		'PhoneNumber',
		'ComplianceMandatory1',
		'ComplianceMandatory2',
		'ComplianceConfirmation',
		'LegalAgeAppointee',
		'AccountSpecification1',
		'AccountSpecification2',
		'AccountSpecification3',
		'AccountSpecification4',
		'AppointmentDetails',
		'CallHandling1',
		'CallHandling2',
		'CommSkills1',
		'CommSkills2',
		'CommSkills3',
		'CommSkills4',
		'StandardRebuttals1',
		'StandardRebuttals2',
		'ComplianceMandatoryClosing',
		'FatalErrors1',
		'FatalErrors2',
		'FatalErrors3',
		'YesCounts',
		'NoCounts',
		'NACounts',
		'AutoFail',
		'QualityScore',
		'ProcessedBy',
	),
)); ?>
