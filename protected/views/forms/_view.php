<?php
/* @var $this FormsController */
/* @var $data Forms */

?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
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
        <p><a href="<?php echo $url=$this->createUrl('forms/ExportData',$params=array('id'=>$data->ID)); ?>"><b>Export to Excel</b></a></p>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MandatoryIsStated')); ?>:</b>
	<?php echo CHtml::encode($data->MandatoryIsStated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AgentIsPitch')); ?>:</b>
	<?php echo CHtml::encode($data->AgentIsPitch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MandatoryOptIsStated')); ?>:</b>
	<?php echo CHtml::encode($data->MandatoryOptIsStated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WaitMandatoryOptIsStated')); ?>:</b>
	<?php echo CHtml::encode($data->WaitMandatoryOptIsStated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsRecordingDisclosed')); ?>:</b>
	<?php echo CHtml::encode($data->IsRecordingDisclosed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerPermanentResident')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerPermanentResident); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerAddressVerified')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerAddressVerified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerAddressAccurate')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerAddressAccurate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerNameVerified')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerNameVerified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerNameCapturedCRM')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerNameCapturedCRM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerAgeVerified')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerAgeVerified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerAgeBracketCaptured')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerAgeBracketCaptured); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerHomeStatusVerified')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerHomeStatusVerified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerHomeStatusVerifiedCRM')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerHomeStatusVerifiedCRM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerEmpploymentStatusVerified')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerEmpploymentStatusVerified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerEmpploymentStatusVerifiedCRM')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerEmpploymentStatusVerifiedCRM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsMaritalStatusVerified')); ?>:</b>
	<?php echo CHtml::encode($data->IsMaritalStatusVerified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsMaritalStatusVerifiedCRM')); ?>:</b>
	<?php echo CHtml::encode($data->IsMaritalStatusVerifiedCRM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsMarketingQuestionsRead')); ?>:</b>
	<?php echo CHtml::encode($data->IsMarketingQuestionsRead); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsMarketingQuestionsReadCRM')); ?>:</b>
	<?php echo CHtml::encode($data->IsMarketingQuestionsReadCRM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsBreakingCycleFollowed')); ?>:</b>
	<?php echo CHtml::encode($data->IsBreakingCycleFollowed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsPositiveResponsesValidated')); ?>:</b>
	<?php echo CHtml::encode($data->IsPositiveResponsesValidated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsAngentExpressUnderstable')); ?>:</b>
	<?php echo CHtml::encode($data->IsAngentExpressUnderstable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsAppropriateTerms')); ?>:</b>
	<?php echo CHtml::encode($data->IsAppropriateTerms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsVocalQualityPracticed')); ?>:</b>
	<?php echo CHtml::encode($data->IsVocalQualityPracticed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsPoliteAcknowledgement')); ?>:</b>
	<?php echo CHtml::encode($data->IsPoliteAcknowledgement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCorrectInformation')); ?>:</b>
	<?php echo CHtml::encode($data->IsCorrectInformation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsStandardRebuttals')); ?>:</b>
	<?php echo CHtml::encode($data->IsStandardRebuttals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsMandatoryClosingStateMent')); ?>:</b>
	<?php echo CHtml::encode($data->IsMandatoryClosingStateMent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsCustomerNotInLine')); ?>:</b>
	<?php echo CHtml::encode($data->IsCustomerNotInLine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsNotInterrupted')); ?>:</b>
	<?php echo CHtml::encode($data->IsNotInterrupted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsEmphatized')); ?>:</b>
	<?php echo CHtml::encode($data->IsEmphatized); ?>
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

	*/ ?>

</div>