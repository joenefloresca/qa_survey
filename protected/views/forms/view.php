<?php
/* @var $this FormsController */
/* @var $model Forms */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Forms', 'url'=>array('index')),
	array('label'=>'Create Forms', 'url'=>array('create')),
	array('label'=>'Update Forms', 'url'=>array('update', 'id'=>$model->ID)),
	// array('label'=>'Delete Forms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Forms', 'url'=>array('admin')),
);
?>

<h1>View Forms #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'AgentName',
		'TeamLeaderManager',
		'Campaign',
		'DateTime',
		'EvaluatedBy',
		'PhoneNumber',
		'MandatoryIsStated',
		'AgentIsPitch',
		'MandatoryOptIsStated',
		'WaitMandatoryOptIsStated',
		'IsRecordingDisclosed',
		'IsCustomerPermanentResident',
		'IsCustomerAddressVerified',
		'IsCustomerAddressAccurate',
		'IsCustomerNameVerified',
		'IsCustomerNameCapturedCRM',
		'IsCustomerAgeVerified',
		'IsCustomerAgeBracketCaptured',
		'IsCustomerHomeStatusVerified',
		'IsCustomerHomeStatusVerifiedCRM',
		'IsCustomerEmpploymentStatusVerified',
		'IsCustomerEmpploymentStatusVerifiedCRM',
		'IsMaritalStatusVerified',
		'IsMaritalStatusVerifiedCRM',
		'IsMarketingQuestionsRead',
		'IsMarketingQuestionsReadCRM',
		'IsBreakingCycleFollowed',
		'IsPositiveResponsesValidated',
		'IsAngentExpressUnderstable',
		'IsAppropriateTerms',
		'IsVocalQualityPracticed',
		'IsPoliteAcknowledgement',
		'IsCorrectInformation',
		'IsStandardRebuttals',
		'IsMandatoryClosingStateMent',
		'IsCustomerNotInLine',
		'IsNotInterrupted',
		'IsEmphatized',
		'YesCounts',
		'NoCounts',
		'NACounts',
		'AutoFail',
		'QualityScore',
		'ProcessedBy',
	),
)); ?>
