<?php

/**
 * This is the model class for table "ukraffles".
 *
 * The followings are the available columns in table 'ukraffles':
 * @property integer $id
 * @property string $AgentName
 * @property string $TeamLeaderManager
 * @property string $Campaign
 * @property string $DateTime
 * @property string $EvaluatedBy
 * @property string $PhoneNumber
 * @property string $ComplianceMandatory1
 * @property string $ComplianceMandatory2
 * @property string $RecordingDisclosure
 * @property string $AgeVerification
 * @property string $CharityPresentation
 * @property string $RafflesPresentation
 * @property string $ASK
 * @property string $VerificationCustomers1
 * @property string $VerificationCustomers2
 * @property string $VerificationCustomers3
 * @property string $VerificationCustomers4
 * @property string $VerificationCustomers5
 * @property string $PackagePresentation
 * @property string $PaymentDetails
 * @property string $ClosingTransaction
 * @property string $CallHandling1
 * @property string $CallHandling2
 * @property string $Comm1
 * @property string $Comm2
 * @property string $Comm3
 * @property string $Comm4
 * @property string $StandardRebuttals1
 * @property string $StandardRebuttals2
 * @property string $ComplianceClosing
 * @property string $FatalErrors1
 * @property string $FatalErrors2
 * @property integer $YesCounts
 * @property integer $NoCounts
 * @property integer $NACounts
 * @property string $AutoFail
 * @property double $QualityScore
 * @property string $ProcessedBy
 */
class Ukraffles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ukraffles';
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
			array('AgentName, TeamLeaderManager, Campaign, EvaluatedBy, PhoneNumber, ComplianceMandatory1, ComplianceMandatory2, RecordingDisclosure, AgeVerification, CharityPresentation, RafflesPresentation, ASK, VerificationCustomers1, VerificationCustomers2, VerificationCustomers3, VerificationCustomers4, VerificationCustomers5, PackagePresentation, PaymentDetails, ClosingTransaction, CallHandling1, CallHandling2, Comm1, Comm2, Comm3, Comm4, StandardRebuttals1, StandardRebuttals2, ComplianceClosing, FatalErrors1, FatalErrors2, AutoFail, ProcessedBy', 'length', 'max'=>50),
			array('DateTime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, AgentName, TeamLeaderManager, Campaign, DateTime, EvaluatedBy, PhoneNumber, ComplianceMandatory1, ComplianceMandatory2, RecordingDisclosure, AgeVerification, CharityPresentation, RafflesPresentation, ASK, VerificationCustomers1, VerificationCustomers2, VerificationCustomers3, VerificationCustomers4, VerificationCustomers5, PackagePresentation, PaymentDetails, ClosingTransaction, CallHandling1, CallHandling2, Comm1, Comm2, Comm3, Comm4, StandardRebuttals1, StandardRebuttals2, ComplianceClosing, FatalErrors1, FatalErrors2, YesCounts, NoCounts, NACounts, AutoFail, QualityScore, ProcessedBy', 'safe', 'on'=>'search'),
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
			'ComplianceMandatory1' => 'Was the Mandatory introduction stated properly- properly branding the charity name as <br/>
										Heart Research Institute UK/Guideposts Trust/Action For Street Kids, stating "calling on <br/>
										BEHALF of" and introducing self by real name and the purpose of the call?',
			'ComplianceMandatory2' => 'Did the Agent Pitch to Anyone?',
			'RecordingDisclosure' => 'Did  the agent state the Recording Disclosure properly?',
			'AgeVerification' => 'Did the agent verify if the customer is over the age of 16?',
			'CharityPresentation' => 'Did the agent inform about the problem?
										Did the agent pitch about the charity\'s specific projects/services/solution<br/> to address the problem?
										Did the agent utilize proper tone when pitching about the problem and when <br/>pitching about the solution',
			'RafflesPresentation' => 'Did the agent pitch about the raffle? Did the agent utilize proper tone?',
			'ASK' => 'Did the agent ask for support by asking customer to join the raffle?',
			'VerificationCustomers1' => 'Did the agent verify the customer\'s address  properly',
			'VerificationCustomers2' => 'Did the agent capture the customer\'s address properly?',
			'VerificationCustomers3' => 'Did the agent verify the customer\'s name properly?',
			'VerificationCustomers4' => 'Did the agent capture  the customer\'s complete name in the Agent CRM?',
			'VerificationCustomers5' => 'Did the agent capture the customer\'s email address?',
			'PackagePresentation' => 'Did the agent pitch the packages properly from top to bottom? <br/>
									  Did the agent state the additional entries for each level?',
			'PaymentDetails' => 'Did the agent stop the recording when asking for the card details?<br/>
									Did the agent read all the mandatory questions and statements for PDD?<br/>
									Did the agent ask for full commitment for Mail Out?',
			'ClosingTransaction' => 'Did the agent state the transaction summary?<br/>
										Did the agent read the mandatory statements?',
			'CallHandling1' => 'Did the agent successfully closed the sale without being pushy?',
			'CallHandling2' => 'Did the agent express self In an understandable conversational manner during the entirety of the call?',
			'Comm1' => 'Did the Agent use appropriate terms, expressions when asking or explaining to customer',
			'Comm2' => 'Did the agent practice Proper Vocal Quality during the entirety of the call?',
			'Comm3' => 'Did the agent use polite acknowledgement statements on customer\'s responses',
			'Comm4' => 'Did the agent provide with correct information to address customer\'s clarifications?',
			'StandardRebuttals1' => 'Did the agent use the Standard Rebuttals to address the customer\'s  objections and hesitations?',
			'StandardRebuttals2' => 'Did the agent state the Mandatory Closing Statement in verbatim',
			'ComplianceClosing' => 'Did the Agent make sure that the customer is not on the line anymore prior to hang up',
			'FatalErrors1' => 'Did the agent show politeness by allowing customer to speak when they are trying to express something.',
			'FatalErrors2' => 'Did the agent properly empathize to vulnerable customer and ended the call politely?',
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
		$criteria->compare('RecordingDisclosure',$this->RecordingDisclosure,true);
		$criteria->compare('AgeVerification',$this->AgeVerification,true);
		$criteria->compare('CharityPresentation',$this->CharityPresentation,true);
		$criteria->compare('RafflesPresentation',$this->RafflesPresentation,true);
		$criteria->compare('ASK',$this->ASK,true);
		$criteria->compare('VerificationCustomers1',$this->VerificationCustomers1,true);
		$criteria->compare('VerificationCustomers2',$this->VerificationCustomers2,true);
		$criteria->compare('VerificationCustomers3',$this->VerificationCustomers3,true);
		$criteria->compare('VerificationCustomers4',$this->VerificationCustomers4,true);
		$criteria->compare('VerificationCustomers5',$this->VerificationCustomers5,true);
		$criteria->compare('PackagePresentation',$this->PackagePresentation,true);
		$criteria->compare('PaymentDetails',$this->PaymentDetails,true);
		$criteria->compare('ClosingTransaction',$this->ClosingTransaction,true);
		$criteria->compare('CallHandling1',$this->CallHandling1,true);
		$criteria->compare('CallHandling2',$this->CallHandling2,true);
		$criteria->compare('Comm1',$this->Comm1,true);
		$criteria->compare('Comm2',$this->Comm2,true);
		$criteria->compare('Comm3',$this->Comm3,true);
		$criteria->compare('Comm4',$this->Comm4,true);
		$criteria->compare('StandardRebuttals1',$this->StandardRebuttals1,true);
		$criteria->compare('StandardRebuttals2',$this->StandardRebuttals2,true);
		$criteria->compare('ComplianceClosing',$this->ComplianceClosing,true);
		$criteria->compare('FatalErrors1',$this->FatalErrors1,true);
		$criteria->compare('FatalErrors2',$this->FatalErrors2,true);
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
        ->from('ukraffles')
        ->where('id=:id', array(':id'=>$id))
        ->queryAll();
        
        return $user;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ukraffles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
