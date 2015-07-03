<?php
/* @var $this GreenguysController */
/* @var $model Greenguys */

$this->breadcrumbs=array(
	'Greenguys'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Greenguys', 'url'=>array('index')),
	array('label'=>'Create Greenguys', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#greenguys-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Greenguys</h1>

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
	'id'=>'greenguys-grid',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
