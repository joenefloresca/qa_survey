<?php
/* @var $this GreenguysController */
/* @var $data Greenguys */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AgentName')); ?>:</b>
	<?php echo CHtml::encode($data->AgentName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TeamLeaderManager')); ?>:</b>
	<?php echo CHtml::encode($data->TeamLeaderManager); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Campaign')); ?>:</b>
	<?php echo CHtml::encode($data->Campaign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateTime')); ?>:</b>
	<?php echo CHtml::encode($data->DateTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EvaluatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->EvaluatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PhoneNumber')); ?>:</b>
	<?php echo CHtml::encode($data->PhoneNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProcessedBy')); ?>:</b>
	<?php echo CHtml::encode($data->ProcessedBy); ?>
	<br />

	<br />
        <p><a href="<?php echo $url=$this->createUrl('greenguys/ExportData',$params=array('id'=>$data->id)); ?>"><b>Export to Excel</b></a></p>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ComplianceMandatory1')); ?>:</b>
	<?php echo CHtml::encode($data->ComplianceMandatory1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComplianceMandatory2')); ?>:</b>
	<?php echo CHtml::encode($data->ComplianceMandatory2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComplianceConfirmation')); ?>:</b>
	<?php echo CHtml::encode($data->ComplianceConfirmation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LegalAgeAppointee')); ?>:</b>
	<?php echo CHtml::encode($data->LegalAgeAppointee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AccountSpecification1')); ?>:</b>
	<?php echo CHtml::encode($data->AccountSpecification1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AccountSpecification2')); ?>:</b>
	<?php echo CHtml::encode($data->AccountSpecification2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AccountSpecification3')); ?>:</b>
	<?php echo CHtml::encode($data->AccountSpecification3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AccountSpecification4')); ?>:</b>
	<?php echo CHtml::encode($data->AccountSpecification4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AppointmentDetails')); ?>:</b>
	<?php echo CHtml::encode($data->AppointmentDetails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CallHandling1')); ?>:</b>
	<?php echo CHtml::encode($data->CallHandling1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CallHandling2')); ?>:</b>
	<?php echo CHtml::encode($data->CallHandling2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CommSkills1')); ?>:</b>
	<?php echo CHtml::encode($data->CommSkills1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CommSkills2')); ?>:</b>
	<?php echo CHtml::encode($data->CommSkills2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CommSkills3')); ?>:</b>
	<?php echo CHtml::encode($data->CommSkills3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CommSkills4')); ?>:</b>
	<?php echo CHtml::encode($data->CommSkills4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StandardRebuttals1')); ?>:</b>
	<?php echo CHtml::encode($data->StandardRebuttals1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StandardRebuttals2')); ?>:</b>
	<?php echo CHtml::encode($data->StandardRebuttals2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComplianceMandatoryClosing')); ?>:</b>
	<?php echo CHtml::encode($data->ComplianceMandatoryClosing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FatalErrors1')); ?>:</b>
	<?php echo CHtml::encode($data->FatalErrors1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FatalErrors2')); ?>:</b>
	<?php echo CHtml::encode($data->FatalErrors2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FatalErrors3')); ?>:</b>
	<?php echo CHtml::encode($data->FatalErrors3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YesCounts')); ?>:</b>
	<?php echo CHtml::encode($data->YesCounts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoCounts')); ?>:</b>
	<?php echo CHtml::encode($data->NoCounts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NACounts')); ?>:</b>
	<?php echo CHtml::encode($data->NACounts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AutoFail')); ?>:</b>
	<?php echo CHtml::encode($data->AutoFail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QualityScore')); ?>:</b>
	<?php echo CHtml::encode($data->QualityScore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProcessedBy')); ?>:</b>
	<?php echo CHtml::encode($data->ProcessedBy); ?>
	<br />

	*/ ?>

</div>