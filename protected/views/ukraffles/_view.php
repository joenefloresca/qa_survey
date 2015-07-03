<?php
/* @var $this UkrafflesController */
/* @var $data Ukraffles */
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
        <p><a href="<?php echo $url=$this->createUrl('ukraffles/ExportData',$params=array('id'=>$data->id)); ?>"><b>Export to Excel</b></a></p>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ComplianceMandatory1')); ?>:</b>
	<?php echo CHtml::encode($data->ComplianceMandatory1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComplianceMandatory2')); ?>:</b>
	<?php echo CHtml::encode($data->ComplianceMandatory2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RecordingDisclosure')); ?>:</b>
	<?php echo CHtml::encode($data->RecordingDisclosure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AgeVerification')); ?>:</b>
	<?php echo CHtml::encode($data->AgeVerification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CharityPresentation')); ?>:</b>
	<?php echo CHtml::encode($data->CharityPresentation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RafflesPresentation')); ?>:</b>
	<?php echo CHtml::encode($data->RafflesPresentation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ASK')); ?>:</b>
	<?php echo CHtml::encode($data->ASK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VerificationCustomers1')); ?>:</b>
	<?php echo CHtml::encode($data->VerificationCustomers1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VerificationCustomers2')); ?>:</b>
	<?php echo CHtml::encode($data->VerificationCustomers2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VerificationCustomers3')); ?>:</b>
	<?php echo CHtml::encode($data->VerificationCustomers3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VerificationCustomers4')); ?>:</b>
	<?php echo CHtml::encode($data->VerificationCustomers4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VerificationCustomers5')); ?>:</b>
	<?php echo CHtml::encode($data->VerificationCustomers5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PackagePresentation')); ?>:</b>
	<?php echo CHtml::encode($data->PackagePresentation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PaymentDetails')); ?>:</b>
	<?php echo CHtml::encode($data->PaymentDetails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClosingTransaction')); ?>:</b>
	<?php echo CHtml::encode($data->ClosingTransaction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CallHandling1')); ?>:</b>
	<?php echo CHtml::encode($data->CallHandling1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CallHandling2')); ?>:</b>
	<?php echo CHtml::encode($data->CallHandling2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comm1')); ?>:</b>
	<?php echo CHtml::encode($data->Comm1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comm2')); ?>:</b>
	<?php echo CHtml::encode($data->Comm2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comm3')); ?>:</b>
	<?php echo CHtml::encode($data->Comm3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comm4')); ?>:</b>
	<?php echo CHtml::encode($data->Comm4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StandardRebuttals1')); ?>:</b>
	<?php echo CHtml::encode($data->StandardRebuttals1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StandardRebuttals2')); ?>:</b>
	<?php echo CHtml::encode($data->StandardRebuttals2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComplianceClosing')); ?>:</b>
	<?php echo CHtml::encode($data->ComplianceClosing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FatalErrors1')); ?>:</b>
	<?php echo CHtml::encode($data->FatalErrors1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FatalErrors2')); ?>:</b>
	<?php echo CHtml::encode($data->FatalErrors2); ?>
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