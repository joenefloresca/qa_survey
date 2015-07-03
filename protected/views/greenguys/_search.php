<?php
/* @var $this GreenguysController */
/* @var $model Greenguys */
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
		<?php echo $form->label($model,'ComplianceConfirmation'); ?>
		<?php echo $form->textField($model,'ComplianceConfirmation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LegalAgeAppointee'); ?>
		<?php echo $form->textField($model,'LegalAgeAppointee',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AccountSpecification1'); ?>
		<?php echo $form->textField($model,'AccountSpecification1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AccountSpecification2'); ?>
		<?php echo $form->textField($model,'AccountSpecification2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AccountSpecification3'); ?>
		<?php echo $form->textField($model,'AccountSpecification3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AccountSpecification4'); ?>
		<?php echo $form->textField($model,'AccountSpecification4',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AppointmentDetails'); ?>
		<?php echo $form->textField($model,'AppointmentDetails',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'CommSkills1'); ?>
		<?php echo $form->textField($model,'CommSkills1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CommSkills2'); ?>
		<?php echo $form->textField($model,'CommSkills2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CommSkills3'); ?>
		<?php echo $form->textField($model,'CommSkills3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CommSkills4'); ?>
		<?php echo $form->textField($model,'CommSkills4',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'ComplianceMandatoryClosing'); ?>
		<?php echo $form->textField($model,'ComplianceMandatoryClosing',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'FatalErrors3'); ?>
		<?php echo $form->textField($model,'FatalErrors3',array('size'=>50,'maxlength'=>50)); ?>
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