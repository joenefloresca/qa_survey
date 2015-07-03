<?php

/**
 * This is the model class for table "greenguys".
 *
 * The followings are the available columns in table 'greenguys':
 * @property integer $id
 * @property string $AgentName
 * @property string $TeamLeaderManager
 * @property string $Campaign
 * @property string $DateTime
 * @property string $EvaluatedBy
 * @property string $PhoneNumber
 * @property string $ComplianceMandatory1
 * @property string $ComplianceMandatory2
 * @property string $ComplianceConfirmation
 * @property string $LegalAgeAppointee
 * @property string $AccountSpecification1
 * @property string $AccountSpecification2
 * @property string $AccountSpecification3
 * @property string $AccountSpecification4
 * @property string $AppointmentDetails
 * @property string $CallHandling1
 * @property string $CallHandling2
 * @property string $CommSkills1
 * @property string $CommSkills2
 * @property string $CommSkills3
 * @property string $CommSkills4
 * @property string $StandardRebuttals1
 * @property string $StandardRebuttals2
 * @property string $ComplianceMandatoryClosing
 * @property string $FatalErrors1
 * @property string $FatalErrors2
 * @property string $FatalErrors3
 * @property integer $YesCounts
 * @property integer $NoCounts
 * @property integer $NACounts
 * @property string $AutoFail
 * @property double $QualityScore
 * @property string $ProcessedBy
 */
class Greenguys extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'greenguys';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('YesCounts, NoCounts, NACounts', 'numerical', 'integerOnly'=>true),
			array('QualityScore', 'numerical'),
			array('AgentName, TeamLeaderManager, Campaign, EvaluatedBy, PhoneNumber, ComplianceMandatory1, ComplianceMandatory2, ComplianceConfirmation, LegalAgeAppointee, AccountSpecification1, AccountSpecification2, AccountSpecification3, AccountSpecification4, AppointmentDetails, CallHandling1, CallHandling2, CommSkills1, CommSkills2, CommSkills3, CommSkills4, StandardRebuttals1, StandardRebuttals2, ComplianceMandatoryClosing, FatalErrors1, FatalErrors2, FatalErrors3, AutoFail, ProcessedBy', 'length', 'max'=>50),
			array('DateTime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, AgentName, TeamLeaderManager, Campaign, DateTime, EvaluatedBy, PhoneNumber, ComplianceMandatory1, ComplianceMandatory2, ComplianceConfirmation, LegalAgeAppointee, AccountSpecification1, AccountSpecification2, AccountSpecification3, AccountSpecification4, AppointmentDetails, CallHandling1, CallHandling2, CommSkills1, CommSkills2, CommSkills3, CommSkills4, StandardRebuttals1, StandardRebuttals2, ComplianceMandatoryClosing, FatalErrors1, FatalErrors2, FatalErrors3, YesCounts, NoCounts, NACounts, AutoFail, QualityScore, ProcessedBy', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'AgentName' => 'Agent Name',
			'TeamLeaderManager' => 'Team Leader Manager',
			'Campaign' => 'Campaign',
			'DateTime' => 'Date Time',
			'EvaluatedBy' => 'Evaluated By',
			'PhoneNumber' => 'Phone Number',
			'ComplianceMandatory1' => 'Was the Mandatory introduction stated properly? <br />  
										1. Stated organization\'s name - GreenGuys spiel <br /> 
										2. Introduced self by real name <br /> 
										3. Stated the purpose of the call',

			'ComplianceMandatory2' => 'Did the agent pitch to anyone?',
			'ComplianceConfirmation' => 'Agent needs to ask thew customer: We’re just giving you a quick call to see if you have <br /> 
										received your LED downlights that are available under the <br /> 
										government’s scheme, have you received your free LED downlights yet?',
			
			'LegalAgeAppointee' => 'Agent needs to make sure that appointee is 18 years and above.',
			'AccountSpecification1' => 'Did the agent confirmed the lights on site are halogen downlights?',
			'AccountSpecification2' => 'Did the agent confirmed the number of downlights on site (needs to make probed if its less or more than 20 lights)',
			'AccountSpecification3' => 'Agent needs to mention: the dimmable lamps as they require a different type of product there are two options. <br /> 
										1) Well for dimmable lamps, you have a few options….We can upgrade the lights on dimmers to a <br /> 
											Philips dimmable LED lamp that would normally <br /> 
											cost you $19.95 at your local hardware for just $6.95 per dimmable light.  Or… <br /> 
										2)  If the dimmer is not important to you and you never use it we can simply disable the dimmer at no cost and put the free lights throughout the house. <br /> 
										3) We can just change the lamps that aren’t dimmable.',

			'AccountSpecification4' => 'Agent needs to advise regarding call out fee of $29.00 if the number of lamps availed is less than 20',
			'AppointmentDetails' => 'Agent needs to make sure all details gathered are accurately correct in setting up the appointment.',
			'CallHandling1' => 'Did the agent follow the "Breaking the Cycle of Nos Policy" properly?',
			'CallHandling2' => 'Did the agent properly VALIDATE THE CUSTOMER\'S POSITIVE RESPONSES/YES?',
			'CommSkills1' => 'Did the agent express self In an understandable and conversational manner during the entirety of the call?',
			'CommSkills2' => 'Did the agent use appropriate terms and/or expressions when asking or explaining to customer?',
			'CommSkills3' => 'Did the agent practice proper Vocal Quality during the entirety of the call?',
			'CommSkills4' => 'Did the agent use polite acknowledgement statements on customer\'s responses?',
			'StandardRebuttals1' => 'Did the agent provide correct information to address customer\'s clarifications?',
			'StandardRebuttals2' => 'Did the agent use the Standard Rebuttals to address the customer\'s  objections and hesitations?',
			'ComplianceMandatoryClosing' => 'Did the agent state the Mandatory Closing Statement verbatim?',
			'FatalErrors1' => 'Did the agent make sure that the customer is not on the line anymore before hanging up?',
			'FatalErrors2' => 'Did the agent show courtesy by not interrupting while customer is speaking?',
			'FatalErrors3' => 'Did the agent correctly provide accurate information with no intention of misleading?',
			'YesCounts' => 'Yes Counts',
			'NoCounts' => 'No Counts',
			'NACounts' => 'N/A Counts',
			'AutoFail' => 'Auto Fail',
			'QualityScore' => 'Quality Score',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('AgentName',$this->AgentName,true);
		$criteria->compare('TeamLeaderManager',$this->TeamLeaderManager,true);
		$criteria->compare('Campaign',$this->Campaign,true);
		$criteria->compare('DateTime',$this->DateTime,true);
		$criteria->compare('EvaluatedBy',$this->EvaluatedBy,true);
		$criteria->compare('PhoneNumber',$this->PhoneNumber,true);
		$criteria->compare('ComplianceMandatory1',$this->ComplianceMandatory1,true);
		$criteria->compare('ComplianceMandatory2',$this->ComplianceMandatory2,true);
		$criteria->compare('ComplianceConfirmation',$this->ComplianceConfirmation,true);
		$criteria->compare('LegalAgeAppointee',$this->LegalAgeAppointee,true);
		$criteria->compare('AccountSpecification1',$this->AccountSpecification1,true);
		$criteria->compare('AccountSpecification2',$this->AccountSpecification2,true);
		$criteria->compare('AccountSpecification3',$this->AccountSpecification3,true);
		$criteria->compare('AccountSpecification4',$this->AccountSpecification4,true);
		$criteria->compare('AppointmentDetails',$this->AppointmentDetails,true);
		$criteria->compare('CallHandling1',$this->CallHandling1,true);
		$criteria->compare('CallHandling2',$this->CallHandling2,true);
		$criteria->compare('CommSkills1',$this->CommSkills1,true);
		$criteria->compare('CommSkills2',$this->CommSkills2,true);
		$criteria->compare('CommSkills3',$this->CommSkills3,true);
		$criteria->compare('CommSkills4',$this->CommSkills4,true);
		$criteria->compare('StandardRebuttals1',$this->StandardRebuttals1,true);
		$criteria->compare('StandardRebuttals2',$this->StandardRebuttals2,true);
		$criteria->compare('ComplianceMandatoryClosing',$this->ComplianceMandatoryClosing,true);
		$criteria->compare('FatalErrors1',$this->FatalErrors1,true);
		$criteria->compare('FatalErrors2',$this->FatalErrors2,true);
		$criteria->compare('FatalErrors3',$this->FatalErrors3,true);
		$criteria->compare('YesCounts',$this->YesCounts);
		$criteria->compare('NoCounts',$this->NoCounts);
		$criteria->compare('NACounts',$this->NACounts);
		$criteria->compare('AutoFail',$this->AutoFail,true);
		$criteria->compare('QualityScore',$this->QualityScore);
		$criteria->compare('ProcessedBy',$this->ProcessedBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getData($id)
    {
        $user = Yii::app()->db->createCommand()
        ->select('*')
        ->from('greenguys')
        ->where('id=:id', array(':id'=>$id))
        ->queryAll();
        
        return $user;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Greenguys the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
