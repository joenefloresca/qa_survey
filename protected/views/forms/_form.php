<?php
/* @var $this FormsController */
/* @var $model Forms */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
$options = array('Yes' => 'Yes', 'No' => 'No', 'N/A' => 'N/A');
$options2 = array('Yes' => 'Yes', 'AutoFail' => 'Auto-Fail', 'N/A' => 'N/A');

$form=$this->beginWidget('CActiveForm', array(
	'id'=>'forms-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <table>
            <tr>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'AgentName'); ?>
                        <?php echo $form->textField($model,'AgentName',array('size'=>25,'maxlength'=>50)); ?>
                        <?php echo $form->error($model,'AgentName'); ?>
                    </div>
                </td>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'DateTime'); ?>
                        <?php echo $form->textField($model,'DateTime', array('id' => 'DateTime')); ?>
                        <?php echo $form->error($model,'DateTime'); ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'TeamLeaderManager'); ?>
                        <?php echo $form->textField($model,'TeamLeaderManager',array('size'=>25,'maxlength'=>50)); ?>
                        <?php echo $form->error($model,'TeamLeaderManager'); ?>
                   </div>
                </td>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'EvaluatedBy'); ?>
                        <?php echo $form->textField($model,'EvaluatedBy',array('size'=>25,'maxlength'=>50)); ?>
                        <?php echo $form->error($model,'EvaluatedBy'); ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'Campaign'); ?>
                        <?php echo $form->textField($model,'Campaign',array('size'=>25,'maxlength'=>50)); ?>
                        <?php echo $form->error($model,'Campaign'); ?>
                    </div>

                </td>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'PhoneNumber'); ?>
                        <?php echo $form->textField($model,'PhoneNumber',array('size'=>25,'maxlength'=>50)); ?>
                        <?php echo $form->error($model,'PhoneNumber'); ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <label for="">QA Score</label>
                        <input type="text" readonly="readonly" id="qa_score" name="qa_score" />
                    </div>

                </td>
                <td>
                    <div class="row">
                        <label for="">Auto Fail</label>
                        <input type="text" readonly="readonly" id="auto_fail" name="auto_fail" />
                    </div>
                </td>
            </tr>
        </table>

	

	<div class="row">
		<?php echo $form->labelEx($model,'MandatoryIsStated'); ?>
		<?php echo CHtml::activeDropDownList($model, 'MandatoryIsStated',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'MandatoryIsStated',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MandatoryIsStated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AgentIsPitch'); ?>
		<?php echo CHtml::activeDropDownList($model, 'AgentIsPitch',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'AgentIsPitch',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AgentIsPitch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MandatoryOptIsStated'); ?>
		<?php echo CHtml::activeDropDownList($model, 'MandatoryOptIsStated',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'MandatoryOptIsStated',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MandatoryOptIsStated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WaitMandatoryOptIsStated'); ?>
		<?php echo CHtml::activeDropDownList($model, 'WaitMandatoryOptIsStated',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'WaitMandatoryOptIsStated',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'WaitMandatoryOptIsStated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsRecordingDisclosed'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsRecordingDisclosed',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsRecordingDisclosed',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsRecordingDisclosed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerPermanentResident'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerPermanentResident',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerPermanentResident',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerPermanentResident'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerAddressVerified'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerAddressVerified',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerAddressVerified',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerAddressVerified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerAddressAccurate'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerAddressAccurate',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerAddressAccurate',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerAddressAccurate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerNameVerified'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerNameVerified',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerNameVerified',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerNameVerified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerNameCapturedCRM'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerNameCapturedCRM',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerNameCapturedCRM',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerNameCapturedCRM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerAgeVerified'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerAgeVerified',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerAgeVerified',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerAgeVerified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerAgeBracketCaptured'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerAgeBracketCaptured',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerAgeBracketCaptured',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerAgeBracketCaptured'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerHomeStatusVerified'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerHomeStatusVerified',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerHomeStatusVerified',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerHomeStatusVerified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerHomeStatusVerifiedCRM'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerHomeStatusVerifiedCRM',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerHomeStatusVerifiedCRM',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerHomeStatusVerifiedCRM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerEmpploymentStatusVerified'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerEmpploymentStatusVerified',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerEmpploymentStatusVerified',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerEmpploymentStatusVerified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerEmpploymentStatusVerifiedCRM'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerEmpploymentStatusVerifiedCRM',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerEmpploymentStatusVerifiedCRM',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerEmpploymentStatusVerifiedCRM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsMaritalStatusVerified'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsMaritalStatusVerified',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsMaritalStatusVerified',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsMaritalStatusVerified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsMaritalStatusVerifiedCRM'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsMaritalStatusVerifiedCRM',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsMaritalStatusVerifiedCRM',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsMaritalStatusVerifiedCRM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsMarketingQuestionsRead'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsMarketingQuestionsRead',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsMarketingQuestionsRead',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsMarketingQuestionsRead'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsMarketingQuestionsReadCRM'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsMarketingQuestionsReadCRM',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsMarketingQuestionsReadCRM',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsMarketingQuestionsReadCRM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsBreakingCycleFollowed'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsBreakingCycleFollowed',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsBreakingCycleFollowed',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsBreakingCycleFollowed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsPositiveResponsesValidated'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsPositiveResponsesValidated',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsPositiveResponsesValidated',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsPositiveResponsesValidated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsAngentExpressUnderstable'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsAngentExpressUnderstable',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsAngentExpressUnderstable',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsAngentExpressUnderstable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsAppropriateTerms'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsAppropriateTerms',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsAppropriateTerms',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsAppropriateTerms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsVocalQualityPracticed'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsVocalQualityPracticed',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsVocalQualityPracticed',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsVocalQualityPracticed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsPoliteAcknowledgement'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsPoliteAcknowledgement',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsPoliteAcknowledgement',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsPoliteAcknowledgement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCorrectInformation'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCorrectInformation',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCorrectInformation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCorrectInformation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsStandardRebuttals'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsStandardRebuttals',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsStandardRebuttals',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsStandardRebuttals'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsMandatoryClosingStateMent'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsMandatoryClosingStateMent',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsMandatoryClosingStateMent',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsMandatoryClosingStateMent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsCustomerNotInLine'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsCustomerNotInLine',
        $options2,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsCustomerNotInLine',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsCustomerNotInLine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsNotInterrupted'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsNotInterrupted',
        $options2,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsNotInterrupted',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsNotInterrupted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsEmphatized'); ?>
		<?php echo CHtml::activeDropDownList($model, 'IsEmphatized',
        $options2,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'IsEmphatized',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IsEmphatized'); ?>
	</div>
	
        <table>
            <tr>
                <td>
                    <b> Ratings </b>
                </td>
                <td>
                    
                </td>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'YesCounts'); ?>
                        <?php echo $form->textField($model,'YesCounts', array('readonly' => 'readonly')); ?>
                        <?php echo $form->error($model,'YesCounts'); ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    96% - 100%
                </td>
                <td>
                    EXCEEDS EXPECTATIONS - VERY GOOD CALL HANDLING
                </td>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'NoCounts'); ?>
                        <?php echo $form->textField($model,'NoCounts', array('readonly' => 'readonly')); ?>
                        <?php echo $form->error($model,'NoCounts'); ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    90% - 95%
                </td>
                <td>
                    MEETS EXPECTATIONS - MAINTAIN CONSISTENCY
                </td>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'NACounts'); ?>
                        <?php echo $form->textField($model,'NACounts', array('readonly' => 'readonly')); ?>
                        <?php echo $form->error($model,'NACounts'); ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    BELOW 90%
                </td>
                <td>
                    NEEDS IMPROVEMENT
                </td>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'AutoFail'); ?>
                        <?php echo CHtml::activeDropDownList($model, 'AutoFail',
                            $options2,
                            array('empty'=>'Choose One'))
                        //echo $form->textField($model,'AutoFail'); ?>
                        <?php echo $form->error($model,'AutoFail'); ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                  
                </td>
                <td>
                 
                </td>
                <td>
                    <div class="row">
                        <?php echo $form->labelEx($model,'QualityScore (%)'); ?>
                        <?php echo $form->textField($model,'QualityScore', array('readonly' => 'readonly')); ?>
                        <?php echo $form->error($model,'QualityScore'); ?>
                    </div>
                </td>
            </tr>
        </table>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit Form' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->