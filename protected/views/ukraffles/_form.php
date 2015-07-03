<?php
/* @var $this UkrafflesController */
/* @var $model Ukraffles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ukraffles-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));

$options = array('Yes' => 'Yes', 'No' => 'No', 'N/A' => 'N/A');
$options2 = array('Yes' => 'Yes', 'AutoFail' => 'Auto-Fail', 'N/A' => 'N/A');

 ?>

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
		<?php //echo $form->labelEx($model,'ProcessedBy'); ?>
		<?php echo $form->textField($model,'ProcessedBy',array('size'=>50,'maxlength'=>50, 'value'=>Yii::app()->user->name, 'hidden'=>'hidden')); ?>
		<?php echo $form->error($model,'ProcessedBy'); ?>
	</div>  

	<div class="row">
		<?php echo $form->labelEx($model,'ComplianceMandatory1'); ?>
		<?php echo CHtml::activeDropDownList($model, 'ComplianceMandatory1',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'ComplianceMandatory1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ComplianceMandatory1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ComplianceMandatory2'); ?>
		<?php echo CHtml::activeDropDownList($model, 'ComplianceMandatory2',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'ComplianceMandatory2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ComplianceMandatory2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RecordingDisclosure'); ?>
		<?php echo CHtml::activeDropDownList($model, 'RecordingDisclosure',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'RecordingDisclosure',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RecordingDisclosure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AgeVerification'); ?>
		<?php echo CHtml::activeDropDownList($model, 'AgeVerification',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'AgeVerification',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AgeVerification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CharityPresentation'); ?>
		<?php echo CHtml::activeDropDownList($model, 'CharityPresentation',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'CharityPresentation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CharityPresentation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RafflesPresentation'); ?>
		<?php echo CHtml::activeDropDownList($model, 'RafflesPresentation',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'RafflesPresentation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RafflesPresentation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ASK'); ?>
		<?php echo CHtml::activeDropDownList($model, 'ASK',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'ASK',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ASK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VerificationCustomers1'); ?>
		<?php echo CHtml::activeDropDownList($model, 'VerificationCustomers1',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'VerificationCustomers1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'VerificationCustomers1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VerificationCustomers2'); ?>
		<?php echo CHtml::activeDropDownList($model, 'VerificationCustomers2',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'VerificationCustomers2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'VerificationCustomers2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VerificationCustomers3'); ?>
		<?php echo CHtml::activeDropDownList($model, 'VerificationCustomers3',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'VerificationCustomers3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'VerificationCustomers3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VerificationCustomers4'); ?>
		<?php echo CHtml::activeDropDownList($model, 'VerificationCustomers4',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'VerificationCustomers4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'VerificationCustomers4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VerificationCustomers5'); ?>
		<?php echo CHtml::activeDropDownList($model, 'VerificationCustomers5',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'VerificationCustomers5',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'VerificationCustomers5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PackagePresentation'); ?>
		<?php echo CHtml::activeDropDownList($model, 'PackagePresentation',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'PackagePresentation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PackagePresentation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PaymentDetails'); ?>
		<?php echo CHtml::activeDropDownList($model, 'PaymentDetails',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'PaymentDetails',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PaymentDetails'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClosingTransaction'); ?>
		<?php echo CHtml::activeDropDownList($model, 'ClosingTransaction',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'ClosingTransaction',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ClosingTransaction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CallHandling1'); ?>
		<?php echo CHtml::activeDropDownList($model, 'CallHandling1',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'CallHandling1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CallHandling1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CallHandling2'); ?>
		<?php echo CHtml::activeDropDownList($model, 'CallHandling2',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'CallHandling2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CallHandling2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comm1'); ?>
		<?php echo CHtml::activeDropDownList($model, 'Comm1',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'Comm1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Comm1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comm2'); ?>
		<?php echo CHtml::activeDropDownList($model, 'Comm2',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'Comm2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Comm2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comm3'); ?>
		<?php echo CHtml::activeDropDownList($model, 'Comm3',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'Comm3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Comm3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comm4'); ?>
		<?php echo CHtml::activeDropDownList($model, 'Comm4',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'Comm4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Comm4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StandardRebuttals1'); ?>
		<?php echo CHtml::activeDropDownList($model, 'StandardRebuttals1',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'StandardRebuttals1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'StandardRebuttals1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StandardRebuttals2'); ?>
		<?php echo CHtml::activeDropDownList($model, 'StandardRebuttals2',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'StandardRebuttals2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'StandardRebuttals2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ComplianceClosing'); ?>
		<?php echo CHtml::activeDropDownList($model, 'ComplianceClosing',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'ComplianceClosing',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ComplianceClosing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FatalErrors1'); ?>
		<?php echo CHtml::activeDropDownList($model, 'FatalErrors1',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'FatalErrors1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FatalErrors1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FatalErrors2'); ?>
		<?php echo CHtml::activeDropDownList($model, 'FatalErrors2',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'FatalErrors2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FatalErrors2'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->