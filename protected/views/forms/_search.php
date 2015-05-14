<?php
/* @var $this FormsController */
/* @var $model Forms */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AgentName'); ?>
		<?php echo $form->textField($model,'AgentName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TeamLeaderManager'); ?>
		<?php echo $form->textField($model,'TeamLeaderManager',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Campaign'); ?>
		<?php echo $form->textField($model,'Campaign',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateTime'); ?>
		<?php echo $form->textField($model,'DateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EvaluatedBy'); ?>
		<?php echo $form->textField($model,'EvaluatedBy',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PhoneNumber'); ?>
		<?php echo $form->textField($model,'PhoneNumber',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MandatoryIsStated'); ?>
		<?php echo $form->textField($model,'MandatoryIsStated',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AgentIsPitch'); ?>
		<?php echo $form->textField($model,'AgentIsPitch',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MandatoryOptIsStated'); ?>
		<?php echo $form->textField($model,'MandatoryOptIsStated',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WaitMandatoryOptIsStated'); ?>
		<?php echo $form->textField($model,'WaitMandatoryOptIsStated',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsRecordingDisclosed'); ?>
		<?php echo $form->textField($model,'IsRecordingDisclosed',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerPermanentResident'); ?>
		<?php echo $form->textField($model,'IsCustomerPermanentResident',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerAddressVerified'); ?>
		<?php echo $form->textField($model,'IsCustomerAddressVerified',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerAddressAccurate'); ?>
		<?php echo $form->textField($model,'IsCustomerAddressAccurate',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerNameVerified'); ?>
		<?php echo $form->textField($model,'IsCustomerNameVerified',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerNameCapturedCRM'); ?>
		<?php echo $form->textField($model,'IsCustomerNameCapturedCRM',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerAgeVerified'); ?>
		<?php echo $form->textField($model,'IsCustomerAgeVerified',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerAgeBracketCaptured'); ?>
		<?php echo $form->textField($model,'IsCustomerAgeBracketCaptured',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerHomeStatusVerified'); ?>
		<?php echo $form->textField($model,'IsCustomerHomeStatusVerified',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerHomeStatusVerifiedCRM'); ?>
		<?php echo $form->textField($model,'IsCustomerHomeStatusVerifiedCRM',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerEmpploymentStatusVerified'); ?>
		<?php echo $form->textField($model,'IsCustomerEmpploymentStatusVerified',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerEmpploymentStatusVerifiedCRM'); ?>
		<?php echo $form->textField($model,'IsCustomerEmpploymentStatusVerifiedCRM',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsMaritalStatusVerified'); ?>
		<?php echo $form->textField($model,'IsMaritalStatusVerified',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsMaritalStatusVerifiedCRM'); ?>
		<?php echo $form->textField($model,'IsMaritalStatusVerifiedCRM',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsMarketingQuestionsRead'); ?>
		<?php echo $form->textField($model,'IsMarketingQuestionsRead',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsMarketingQuestionsReadCRM'); ?>
		<?php echo $form->textField($model,'IsMarketingQuestionsReadCRM',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsBreakingCycleFollowed'); ?>
		<?php echo $form->textField($model,'IsBreakingCycleFollowed',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsPositiveResponsesValidated'); ?>
		<?php echo $form->textField($model,'IsPositiveResponsesValidated',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsAngentExpressUnderstable'); ?>
		<?php echo $form->textField($model,'IsAngentExpressUnderstable',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsAppropriateTerms'); ?>
		<?php echo $form->textField($model,'IsAppropriateTerms',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsVocalQualityPracticed'); ?>
		<?php echo $form->textField($model,'IsVocalQualityPracticed',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsPoliteAcknowledgement'); ?>
		<?php echo $form->textField($model,'IsPoliteAcknowledgement',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCorrectInformation'); ?>
		<?php echo $form->textField($model,'IsCorrectInformation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsStandardRebuttals'); ?>
		<?php echo $form->textField($model,'IsStandardRebuttals',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsMandatoryClosingStateMent'); ?>
		<?php echo $form->textField($model,'IsMandatoryClosingStateMent',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsCustomerNotInLine'); ?>
		<?php echo $form->textField($model,'IsCustomerNotInLine',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsNotInterrupted'); ?>
		<?php echo $form->textField($model,'IsNotInterrupted',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsEmphatized'); ?>
		<?php echo $form->textField($model,'IsEmphatized',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YesCounts'); ?>
		<?php echo $form->textField($model,'YesCounts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoCounts'); ?>
		<?php echo $form->textField($model,'NoCounts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NACounts'); ?>
		<?php echo $form->textField($model,'NACounts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AutoFail'); ?>
		<?php echo $form->textField($model,'AutoFail',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QualityScore'); ?>
		<?php echo $form->textField($model,'QualityScore'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->