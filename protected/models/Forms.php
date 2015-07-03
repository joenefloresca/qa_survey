<?php

/**
 * This is the model class for table "forms".
 *
 * The followings are the available columns in table 'forms':
 * @property integer $ID
 * @property string $AgentName
 * @property string $TeamLeaderManager
 * @property string $Campaign
 * @property string $DateTime
 * @property string $EvaluatedBy
 * @property string $PhoneNumber
 * @property string $MandatoryIsStated
 * @property string $AgentIsPitch
 * @property string $MandatoryOptIsStated
 * @property string $WaitMandatoryOptIsStated
 * @property string $IsRecordingDisclosed
 * @property string $IsCustomerPermanentResident
 * @property string $IsCustomerAddressVerified
 * @property string $IsCustomerAddressAccurate
 * @property string $IsCustomerNameVerified
 * @property string $IsCustomerNameCapturedCRM
 * @property string $IsCustomerAgeVerified
 * @property string $IsCustomerAgeBracketCaptured
 * @property string $IsCustomerHomeStatusVerified
 * @property string $IsCustomerHomeStatusVerifiedCRM
 * @property string $IsCustomerEmpploymentStatusVerified
 * @property string $IsCustomerEmpploymentStatusVerifiedCRM
 * @property string $IsMaritalStatusVerified
 * @property string $IsMaritalStatusVerifiedCRM
 * @property string $IsMarketingQuestionsRead
 * @property string $IsMarketingQuestionsReadCRM
 * @property string $IsBreakingCycleFollowed
 * @property string $IsPositiveResponsesValidated
 * @property string $IsAngentExpressUnderstable
 * @property string $IsAppropriateTerms
 * @property string $IsVocalQualityPracticed
 * @property string $IsPoliteAcknowledgement
 * @property string $IsCorrectInformation
 * @property string $IsStandardRebuttals
 * @property string $IsMandatoryClosingStateMent
 * @property string $IsCustomerNotInLine
 * @property string $IsNotInterrupted
 * @property string $IsEmphatized
 * @property integer $YesCounts
 * @property integer $NoCounts
 * @property integer $NACounts
 * @property string $AutoFail
 * @property double $QualityScore
 * @property string $ProcessedBy
 */
class Forms extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'forms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('AgentName, TeamLeaderManager, Campaign, DateTime, EvaluatedBy, PhoneNumber, MandatoryIsStated, AgentIsPitch, MandatoryOptIsStated, WaitMandatoryOptIsStated, IsRecordingDisclosed, IsCustomerPermanentResident, IsCustomerAddressVerified, IsCustomerAddressAccurate, IsCustomerNameVerified, IsCustomerNameCapturedCRM, IsCustomerAgeVerified, IsCustomerAgeBracketCaptured, IsCustomerHomeStatusVerified, IsCustomerHomeStatusVerifiedCRM, IsCustomerEmpploymentStatusVerified, IsCustomerEmpploymentStatusVerifiedCRM, IsMaritalStatusVerified, IsMaritalStatusVerifiedCRM, IsMarketingQuestionsRead, IsMarketingQuestionsReadCRM, IsBreakingCycleFollowed, IsPositiveResponsesValidated, IsAngentExpressUnderstable, IsAppropriateTerms, IsVocalQualityPracticed, IsPoliteAcknowledgement, IsCorrectInformation, IsStandardRebuttals, IsMandatoryClosingStateMent, IsCustomerNotInLine, IsNotInterrupted, IsEmphatized, YesCounts, NoCounts, NACounts, AutoFail, QualityScore', 'required'),
			array('YesCounts, NoCounts, NACounts', 'numerical', 'integerOnly'=>true),
			array('QualityScore', 'numerical'),
			array('AgentName, TeamLeaderManager, Campaign, EvaluatedBy, PhoneNumber, MandatoryIsStated, AgentIsPitch, MandatoryOptIsStated, WaitMandatoryOptIsStated, IsRecordingDisclosed, IsCustomerPermanentResident, IsCustomerAddressVerified, IsCustomerAddressAccurate, IsCustomerNameVerified, IsCustomerNameCapturedCRM, IsCustomerAgeVerified, IsCustomerAgeBracketCaptured, IsCustomerHomeStatusVerified, IsCustomerHomeStatusVerifiedCRM, IsCustomerEmpploymentStatusVerified, IsCustomerEmpploymentStatusVerifiedCRM, IsMaritalStatusVerified, IsMaritalStatusVerifiedCRM, IsMarketingQuestionsRead, IsMarketingQuestionsReadCRM, IsBreakingCycleFollowed, IsPositiveResponsesValidated, IsAngentExpressUnderstable, IsAppropriateTerms, IsVocalQualityPracticed, IsPoliteAcknowledgement, IsCorrectInformation, IsStandardRebuttals, IsMandatoryClosingStateMent, IsCustomerNotInLine, IsNotInterrupted, IsEmphatized, AutoFail, ProcessedBy', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, AgentName, TeamLeaderManager, Campaign, DateTime, EvaluatedBy, PhoneNumber, MandatoryIsStated, AgentIsPitch, MandatoryOptIsStated, WaitMandatoryOptIsStated, IsRecordingDisclosed, IsCustomerPermanentResident, IsCustomerAddressVerified, IsCustomerAddressAccurate, IsCustomerNameVerified, IsCustomerNameCapturedCRM, IsCustomerAgeVerified, IsCustomerAgeBracketCaptured, IsCustomerHomeStatusVerified, IsCustomerHomeStatusVerifiedCRM, IsCustomerEmpploymentStatusVerified, IsCustomerEmpploymentStatusVerifiedCRM, IsMaritalStatusVerified, IsMaritalStatusVerifiedCRM, IsMarketingQuestionsRead, IsMarketingQuestionsReadCRM, IsBreakingCycleFollowed, IsPositiveResponsesValidated, IsAngentExpressUnderstable, IsAppropriateTerms, IsVocalQualityPracticed, IsPoliteAcknowledgement, IsCorrectInformation, IsStandardRebuttals, IsMandatoryClosingStateMent, IsCustomerNotInLine, IsNotInterrupted, IsEmphatized, YesCounts, NoCounts, NACounts, AutoFail, QualityScore, ProcessedBy', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'AgentName' => 'Agent Name',
			'TeamLeaderManager' => 'Team Leader Manager',
			'Campaign' => 'Campaign',
			'DateTime' => 'Date Time',
			'EvaluatedBy' => 'Evaluated By',
			'PhoneNumber' => 'Phone Number',
			'MandatoryIsStated' => 'Was the Mandatory introduction stated properly? <br /> 
					1. Stated organization\'s name - MYCHARITYSURVEY.COM <br />
					2. Introduced self by real name <br />
					3. Stated the purpose of the call <br />',
			'AgentIsPitch' => 'Did the agent pitch to anyone?',
			'MandatoryOptIsStated' => 'Was the Mandatory Opt In stated properly?',
			'IsRecordingDisclosed' => 'Did  the agent state the Recording Disclosure properly?',
			'IsCustomerPermanentResident' => 'Did the agent verify if the customer is a permanent resident of UK/AUNZ <br />  (Whichever campaign is applicable)? <br /> ',
			'IsCustomerAddressVerified' => 'Did the agent verify the customer\'s address  properly?',
			'IsCustomerAddressAccurate' => 'Did the agent capture the customer\'s address accurately?',
			'IsCustomerNameVerified' => 'Did the agent verify the customer\'s name properly?',
			'IsCustomerNameCapturedCRM' => 'Did the agent capture  the customer\'s complete name <br /> in the Agent CRM accurately?<br />',
			'IsCustomerAgeVerified' => 'Did the agent verify the customer\'s age properly?',
			'IsCustomerAgeBracketCaptured' => 'Did the agent capture the customer\'s age bracket <br /> in the Agent CRM accurately?<br />',
			'IsCustomerHomeStatusVerified' => 'Did the agent verify the customer\'s Home <br /> Ownership status properly? <br />',
			'IsCustomerHomeStatusVerifiedCRM' => 'Did the agent capture the customer\'s Home Ownership<br /> status in the Agent CRM accurately?<br />',
			'IsCustomerEmpploymentStatusVerified' => 'Did the agent verify the customer\'s Employment Status properly?',
			'IsCustomerEmpploymentStatusVerifiedCRM' => 'Did the agent capture the customer\'s verified  <br /> Employment Status in the Agent CRM accurately? <br /> ',
			'IsMaritalStatusVerified' => 'Did the agent verify Marital Status of the customer?',
			'IsMaritalStatusVerifiedCRM' => 'Did the agent capture the customer\'s Marital Status <br /> in the Agetn CRM accurately? <br />',
			'IsMarketingQuestionsRead' => 'Did the agent read all the questions in the <br /> marketing questionaire properly?<br />',
			'IsMarketingQuestionsReadCRM' => 'Did the agent capture the customer\'s response to <br /> the marketing questionaire in the Agent CRM accurately?<br />',
			'IsBreakingCycleFollowed' => 'Did the agent follow the "Breaking the Cycle of Nos Policy" properly?',
			'IsPositiveResponsesValidated' => 'Did the agent properly VALIDATE THE CUSTOMER\'S POSITIVE RESPONSES/YES?',
			'IsAngentExpressUnderstable' => 'Did the agent express self In an understandable and <br /> conversational manner during the entirety of the call?<br />',
			'IsVocalQualityPracticed' => 'Did the agent practice proper Vocal Quality during the entirety of the call?',
			'IsPoliteAcknowledgement' => 'Did the agent use polite acknowledgement<br /> statements on customer\'s responses?<br />',
			'IsCorrectInformation' => 'Did the agent provide correct information to  <br /> address customer\'s clarifications? <br /> ',
			'IsStandardRebuttals' => 'Did the agent use the Standard Rebuttals to <br />address the customer\'s  objections and hesitations?<br />',
			'IsMandatoryClosingStateMent' => 'Did the agent state the Mandatory Closing Statement verbatim?',
			'IsCustomerNotInLine' => 'Did the agent make sure that the customer <br /> is not on the line anymore before hanging up?<br />',
			'IsNotInterrupted' => 'Did the agent show courtesy by not interrupting while customer is speaking?',
			'IsEmphatized' => 'Did the agent properly empathize to vulnerable customer and ended the call politely?',
			'YesCounts' => 'Yes Counts',
			'NoCounts' => 'No Counts',
			'NACounts' => 'N/A Counts',
			'AutoFail' => 'Auto Fail',
			'QualityScore' => 'Quality Score',
			'WaitMandatoryOptIsStated' => 'Did the agent wait for the customer\'s  <br />response to the Mandatory Opt In? <br />',
			'IsAppropriateTerms' => 'Did the agent use appropriate terms and/or <br /> expressions when asking or explaining to customer?<br />',
			'ProcessedBy' => 'Processed By',
                        
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('AgentName',$this->AgentName,true);
		$criteria->compare('TeamLeaderManager',$this->TeamLeaderManager,true);
		$criteria->compare('Campaign',$this->Campaign,true);
		$criteria->compare('DateTime',$this->DateTime,true);
		$criteria->compare('EvaluatedBy',$this->EvaluatedBy,true);
		$criteria->compare('PhoneNumber',$this->PhoneNumber,true);
		$criteria->compare('MandatoryIsStated',$this->MandatoryIsStated,true);
		$criteria->compare('AgentIsPitch',$this->AgentIsPitch,true);
		$criteria->compare('MandatoryOptIsStated',$this->MandatoryOptIsStated,true);
		$criteria->compare('WaitMandatoryOptIsStated',$this->WaitMandatoryOptIsStated,true);
		$criteria->compare('IsRecordingDisclosed',$this->IsRecordingDisclosed,true);
		$criteria->compare('IsCustomerPermanentResident',$this->IsCustomerPermanentResident,true);
		$criteria->compare('IsCustomerAddressVerified',$this->IsCustomerAddressVerified,true);
		$criteria->compare('IsCustomerAddressAccurate',$this->IsCustomerAddressAccurate,true);
		$criteria->compare('IsCustomerNameVerified',$this->IsCustomerNameVerified,true);
		$criteria->compare('IsCustomerNameCapturedCRM',$this->IsCustomerNameCapturedCRM,true);
		$criteria->compare('IsCustomerAgeVerified',$this->IsCustomerAgeVerified,true);
		$criteria->compare('IsCustomerAgeBracketCaptured',$this->IsCustomerAgeBracketCaptured,true);
		$criteria->compare('IsCustomerHomeStatusVerified',$this->IsCustomerHomeStatusVerified,true);
		$criteria->compare('IsCustomerHomeStatusVerifiedCRM',$this->IsCustomerHomeStatusVerifiedCRM,true);
		$criteria->compare('IsCustomerEmpploymentStatusVerified',$this->IsCustomerEmpploymentStatusVerified,true);
		$criteria->compare('IsCustomerEmpploymentStatusVerifiedCRM',$this->IsCustomerEmpploymentStatusVerifiedCRM,true);
		$criteria->compare('IsMaritalStatusVerified',$this->IsMaritalStatusVerified,true);
		$criteria->compare('IsMaritalStatusVerifiedCRM',$this->IsMaritalStatusVerifiedCRM,true);
		$criteria->compare('IsMarketingQuestionsRead',$this->IsMarketingQuestionsRead,true);
		$criteria->compare('IsMarketingQuestionsReadCRM',$this->IsMarketingQuestionsReadCRM,true);
		$criteria->compare('IsBreakingCycleFollowed',$this->IsBreakingCycleFollowed,true);
		$criteria->compare('IsPositiveResponsesValidated',$this->IsPositiveResponsesValidated,true);
		$criteria->compare('IsAngentExpressUnderstable',$this->IsAngentExpressUnderstable,true);
		$criteria->compare('IsAppropriateTerms',$this->IsAppropriateTerms,true);
		$criteria->compare('IsVocalQualityPracticed',$this->IsVocalQualityPracticed,true);
		$criteria->compare('IsPoliteAcknowledgement',$this->IsPoliteAcknowledgement,true);
		$criteria->compare('IsCorrectInformation',$this->IsCorrectInformation,true);
		$criteria->compare('IsStandardRebuttals',$this->IsStandardRebuttals,true);
		$criteria->compare('IsMandatoryClosingStateMent',$this->IsMandatoryClosingStateMent,true);
		$criteria->compare('IsCustomerNotInLine',$this->IsCustomerNotInLine,true);
		$criteria->compare('IsNotInterrupted',$this->IsNotInterrupted,true);
		$criteria->compare('IsEmphatized',$this->IsEmphatized,true);
		$criteria->compare('YesCounts',$this->YesCounts);
		$criteria->compare('NoCounts',$this->NoCounts);
		$criteria->compare('NACounts',$this->NACounts);
		$criteria->compare('AutoFail',$this->AutoFail,true);
		$criteria->compare('QualityScore',$this->QualityScore);
		$criteria->compare('ProcessedBy',$this->ProcessedBy);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
    public function getData($id)
    {
        $user = Yii::app()->db->createCommand()
        ->select('*')
        ->from('forms')
        ->where('id=:id', array(':id'=>$id))
        ->queryAll();
        
        return $user;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Forms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
