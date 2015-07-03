<?php
/* @var $this GreenguysController */
/* @var $model Greenguys */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'greenguys-form',
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
		<?php echo $form->labelEx($model,'ComplianceConfirmation'); ?>
		<?php echo CHtml::activeDropDownList($model, 'ComplianceConfirmation',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'ComplianceConfirmation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ComplianceConfirmation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LegalAgeAppointee'); ?>
		<?php echo CHtml::activeDropDownList($model, 'LegalAgeAppointee',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'LegalAgeAppointee',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'LegalAgeAppointee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AccountSpecification1'); ?>
		<?php echo CHtml::activeDropDownList($model, 'AccountSpecification1',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'AccountSpecification1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AccountSpecification1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AccountSpecification2'); ?>
		<?php echo CHtml::activeDropDownList($model, 'AccountSpecification2',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'AccountSpecification2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AccountSpecification2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AccountSpecification3'); ?>
		<?php echo CHtml::activeDropDownList($model, 'AccountSpecification3',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'AccountSpecification3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AccountSpecification3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AccountSpecification4'); ?>
		<?php echo CHtml::activeDropDownList($model, 'AccountSpecification4',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'AccountSpecification4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AccountSpecification4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AppointmentDetails'); ?>
		<?php echo CHtml::activeDropDownList($model, 'AppointmentDetails',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'AppointmentDetails',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AppointmentDetails'); ?>
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
		<?php echo $form->labelEx($model,'CommSkills1'); ?>
		<?php echo CHtml::activeDropDownList($model, 'CommSkills1',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'CommSkills1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CommSkills1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CommSkills2'); ?>
		<?php echo CHtml::activeDropDownList($model, 'CommSkills2',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'CommSkills2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CommSkills2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CommSkills3'); ?>
		<?php echo CHtml::activeDropDownList($model, 'CommSkills3',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'CommSkills3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CommSkills3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CommSkills4'); ?>
		<?php echo CHtml::activeDropDownList($model, 'CommSkills4',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'CommSkills4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CommSkills4'); ?>
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
		<?php echo $form->labelEx($model,'ComplianceMandatoryClosing'); ?>
		<?php echo CHtml::activeDropDownList($model, 'ComplianceMandatoryClosing',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'ComplianceMandatoryClosing',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ComplianceMandatoryClosing'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'FatalErrors3'); ?>
		<?php echo CHtml::activeDropDownList($model, 'FatalErrors3',
        $options,
        array('empty'=>'Choose One'))
		//echo $form->textField($model,'FatalErrors3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FatalErrors3'); ?>
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