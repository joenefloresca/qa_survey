<?php

class FormsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','ExportData'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','ExportData'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Forms;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Forms']))
		{
			$model->attributes=$_POST['Forms'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Forms']))
		{
			$model->attributes=$_POST['Forms'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
//		$dataProvider=new CActiveDataProvider('Forms');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
            $criteria = new CDbCriteria();
            // Search based from Filter
            if(isset($_GET['q']) && isset($_GET['filter']))
            {
                $q = $_GET['q'];
                if($_GET['q'] != "" && $_GET['filter'] != "")
                {
                   $criteria->compare($_GET['filter'], $q, true, 'OR'); 
                }
                else // If no Filter Selected
                {
                    $criteria->compare('ID', $q, true, 'OR');
                    $criteria->compare('AgentName', $q, true, 'OR');
                    $criteria->compare('TeamLeaderManager', $q, true, 'OR');
                    $criteria->compare('DateTime', $q, true, 'OR');
                    $criteria->compare('EvaluatedBy', $q, true, 'OR');
                    $criteria->compare('PhoneNumber', $q, true, 'OR');
                    $criteria->compare('ProcessedBy', $q, true, 'OR');
                }
            } 
            
            $dataProvider=new CActiveDataProvider("Forms", array('criteria'=>$criteria));

            $this->render('index',array(
                'dataProvider'=>$dataProvider,
            ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Forms('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Forms']))
			$model->attributes=$_GET['Forms'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
    /**
 	* Export Data to Excel
 	*/
    public function actionExportData($id)
    {
       
        $phpExcelPath = Yii::getPathOfAlias('ext.phpexcel.Classes');

        // Turn off our amazing library autoload 
         //spl_autoload_unregister(array('YiiBase','autoload'));        

        //spl_autoload_register(array('YiiBase','autoload'));
        // making use of our reference, include the main class
        // when we do this, phpExcel has its own autoload registration
        // procedure (PHPExcel_Autoloader::Register();)
       include($phpExcelPath . DIRECTORY_SEPARATOR . 'PHPExcel.php');

        // Create new PHPExcel object
        $objPHPExcel = new PHPExcel();
        //$objPHPExcel = PHPExcel_IOFactory::load("C:/wamp/www/qa_survey/public/QA_Form.xlsx");
        $objPHPExcel = PHPExcel_IOFactory::load("C:/wamp/www/qa_survey/public/QAFORM.xlsx");
        
        // Query Data from Database
        $form = new Forms();
        $result = $form->getData($id);
        
        // Assign Values
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->SetCellValue('B2', 'NAME OF AGENT: '.$result[0]['AgentName']);
        $objPHPExcel->getActiveSheet()->SetCellValue('B3', 'TEAM LEADER/MANAGER: '.$result[0]['TeamLeaderManager']);
        $objPHPExcel->getActiveSheet()->SetCellValue('B4', 'CAMPAIGN: '.$result[0]['Campaign']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C2', 'CALL DATE & TIME: '.$result[0]['DateTime']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C3', 'EVALUATED BY: '.$result[0]['EvaluatedBy']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C4', 'PHONE NUMBER : '.$result[0]['PhoneNumber']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D9', $result[0]['MandatoryIsStated']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D10', $result[0]['AgentIsPitch']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D11', $result[0]['MandatoryOptIsStated']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D12', $result[0]['WaitMandatoryOptIsStated']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D13', $result[0]['IsRecordingDisclosed']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D14', $result[0]['IsCustomerPermanentResident']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D15', $result[0]['IsCustomerAddressVerified']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D16', $result[0]['IsCustomerAddressAccurate']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D17', $result[0]['IsCustomerNameVerified']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D18', $result[0]['IsCustomerNameCapturedCRM']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D19', $result[0]['IsCustomerAgeVerified']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D20', $result[0]['IsCustomerAgeBracketCaptured']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D21', $result[0]['IsCustomerHomeStatusVerified']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D22', $result[0]['IsCustomerHomeStatusVerifiedCRM']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D23', $result[0]['IsCustomerEmpploymentStatusVerified']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D24', $result[0]['IsCustomerEmpploymentStatusVerifiedCRM']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D25', $result[0]['IsMaritalStatusVerified']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D26', $result[0]['IsMaritalStatusVerifiedCRM']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D27', $result[0]['IsMarketingQuestionsRead']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D28', $result[0]['IsMarketingQuestionsReadCRM']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D29', $result[0]['IsBreakingCycleFollowed']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D30', $result[0]['IsPositiveResponsesValidated']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D31', $result[0]['IsAngentExpressUnderstable']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D32', $result[0]['IsAppropriateTerms']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D33', $result[0]['IsVocalQualityPracticed']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D34', $result[0]['IsPoliteAcknowledgement']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D35', $result[0]['IsCorrectInformation']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D36', $result[0]['IsStandardRebuttals']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D37', $result[0]['IsMandatoryClosingStateMent']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D38', $result[0]['IsCustomerNotInLine']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D39', $result[0]['IsNotInterrupted']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D40', $result[0]['IsEmphatized']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D41', $result[0]['YesCounts']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D42', $result[0]['NoCounts']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D43', $result[0]['NACounts']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D44', $result[0]['AutoFail']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D45', $result[0]['QualityScore']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C5', $result[0]['QualityScore']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C6', $result[0]['AutoFail']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C7', $result[0]['ProcessedBy']);
        
        $filename=mt_rand(1,100000).'.xlsx'; //just some random filename
        if ( headers_sent() ) die("**Error: headers sent");
  
        header('Content-Type: application/vnd.ms-excel');
        header('Cache-Control: max-age=0');
        header('Content-Description: File Transfer');   
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment; filename=" . $filename);    
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  //downloadable file is in Excel 2003 format (.xls)
        $objWriter->save('php://output');  //send it to user, of course you can save

    }
        
        public function actionOverview()
        {
            $this->render('overview');
        }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Forms the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Forms::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Forms $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='forms-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
