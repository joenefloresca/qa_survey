<?php
/* @var $this UkrafflesController */
/* @var $model Ukraffles */

$this->breadcrumbs=array(
	'Ukraffles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ukraffles', 'url'=>array('index')),
	array('label'=>'Create Ukraffles', 'url'=>array('create')),
	array('label'=>'Update Ukraffles', 'url'=>array('update', 'id'=>$model->id)),
	// array('label'=>'Delete Ukraffles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Ukraffles', 'url'=>array('admin')),
);
?>

<h1>View Ukraffles #<?php echo $model->id; ?></h1>

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
		'RecordingDisclosure',
		'AgeVerification',
		'CharityPresentation',
		'RafflesPresentation',
		'ASK',
		'VerificationCustomers1',
		'VerificationCustomers2',
		'VerificationCustomers3',
		'VerificationCustomers4',
		'VerificationCustomers5',
		'PackagePresentation',
		'PaymentDetails',
		'ClosingTransaction',
		'CallHandling1',
		'CallHandling2',
		'Comm1',
		'Comm2',
		'Comm3',
		'Comm4',
		'StandardRebuttals1',
		'StandardRebuttals2',
		'ComplianceClosing',
		'FatalErrors1',
		'FatalErrors2',
		'YesCounts',
		'NoCounts',
		'NACounts',
		'AutoFail',
		'QualityScore',
		'ProcessedBy',
	),
)); ?>
