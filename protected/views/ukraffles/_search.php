<?php
/* @var $this UkrafflesController */
/* @var $model Ukraffles */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
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
		<?php echo $form->label($model,'ComplianceMandatory1'); ?>
		<?php echo $form->textField($model,'ComplianceMandatory1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ComplianceMandatory2'); ?>
		<?php echo $form->textField($model,'ComplianceMandatory2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RecordingDisclosure'); ?>
		<?php echo $form->textField($model,'RecordingDisclosure',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AgeVerification'); ?>
		<?php echo $form->textField($model,'AgeVerification',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CharityPresentation'); ?>
		<?php echo $form->textField($model,'CharityPresentation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RafflesPresentation'); ?>
		<?php echo $form->textField($model,'RafflesPresentation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ASK'); ?>
		<?php echo $form->textField($model,'ASK',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VerificationCustomers1'); ?>
		<?php echo $form->textField($model,'VerificationCustomers1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VerificationCustomers2'); ?>
		<?php echo $form->textField($model,'VerificationCustomers2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VerificationCustomers3'); ?>
		<?php echo $form->textField($model,'VerificationCustomers3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VerificationCustomers4'); ?>
		<?php echo $form->textField($model,'VerificationCustomers4',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VerificationCustomers5'); ?>
		<?php echo $form->textField($model,'VerificationCustomers5',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PackagePresentation'); ?>
		<?php echo $form->textField($model,'PackagePresentation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PaymentDetails'); ?>
		<?php echo $form->textField($model,'PaymentDetails',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClosingTransaction'); ?>
		<?php echo $form->textField($model,'ClosingTransaction',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CallHandling1'); ?>
		<?php echo $form->textField($model,'CallHandling1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CallHandling2'); ?>
		<?php echo $form->textField($model,'CallHandling2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comm1'); ?>
		<?php echo $form->textField($model,'Comm1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comm2'); ?>
		<?php echo $form->textField($model,'Comm2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comm3'); ?>
		<?php echo $form->textField($model,'Comm3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comm4'); ?>
		<?php echo $form->textField($model,'Comm4',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StandardRebuttals1'); ?>
		<?php echo $form->textField($model,'StandardRebuttals1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StandardRebuttals2'); ?>
		<?php echo $form->textField($model,'StandardRebuttals2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ComplianceClosing'); ?>
		<?php echo $form->textField($model,'ComplianceClosing',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FatalErrors1'); ?>
		<?php echo $form->textField($model,'FatalErrors1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FatalErrors2'); ?>
		<?php echo $form->textField($model,'FatalErrors2',array('size'=>50,'maxlength'=>50)); ?>
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

	<div class="row">
		<?php echo $form->label($model,'ProcessedBy'); ?>
		<?php echo $form->textField($model,'ProcessedBy',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->