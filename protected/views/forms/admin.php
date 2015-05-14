<?php
/* @var $this FormsController */
/* @var $model Forms */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Forms', 'url'=>array('index')),
	array('label'=>'Create Forms', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#forms-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Forms</h1>

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

<?php 

$this->widget('EExcelView', array(
     'id'=>'forms-grid',
     'dataProvider'=>$model->search(),
      'filter'=>$model,
     'title'=>'Title',
     'autoWidth'=>false,
     'template'=>"{summary}\n{items}\n{exportbuttons}\n{pager}",
     'htmlOptions' => array('style' => 'width: 850px;'),
     'columns'=>array(
		'ID',
		'AgentName',
		'TeamLeaderManager',
		'Campaign',
		'DateTime',
		'EvaluatedBy',
                'YesCounts',
		'NoCounts',
		'NACounts',
		'AutoFail',
		'QualityScore',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
                    'template' => '{view}',
                
		),
	),
      
));

?>
