<?php
/* @var $this UkrafflesController */
/* @var $model Ukraffles */

$this->breadcrumbs=array(
	'Ukraffles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ukraffles', 'url'=>array('index')),
	array('label'=>'Create Ukraffles', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ukraffles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ukraffles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ukraffles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'AgentName',
		'TeamLeaderManager',
		'Campaign',
		'DateTime',
		'EvaluatedBy',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
