<?php

class UkrafflesController extends Controller
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
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','ExportData'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Ukraffles;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ukraffles']))
		{
			$model->attributes=$_POST['Ukraffles'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Ukraffles']))
		{
			$model->attributes=$_POST['Ukraffles'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		// $dataProvider=new CActiveDataProvider('Ukraffles');
		// $this->render('index',array(
		// 	'dataProvider'=>$dataProvider,
		// ));

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
        
        $dataProvider=new CActiveDataProvider("Ukraffles", array('criteria'=>$criteria));

        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Ukraffles('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ukraffles']))
			$model->attributes=$_GET['Ukraffles'];

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
        $objPHPExcel = PHPExcel_IOFactory::load("C:/wamp/www/qa_survey/public/QAUKRAFFLES.xlsx");
        
        // Query Data from Database
        $form = new Ukraffles();
        $result = $form->getData($id);

        // Assign Values
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->SetCellValue('B2', 'NAME OF AGENT: '.$result[0]['AgentName']);
        $objPHPExcel->getActiveSheet()->SetCellValue('B3', 'TEAM LEADER/MANAGER: '.$result[0]['TeamLeaderManager']);
        $objPHPExcel->getActiveSheet()->SetCellValue('B4', 'CAMPAIGN: '.$result[0]['Campaign']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C2', 'CALL DATE & TIME: '.$result[0]['DateTime']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C3', 'EVALUATED BY: '.$result[0]['EvaluatedBy']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C4', 'PHONE NUMBER : '.$result[0]['PhoneNumber']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D9', $result[0]['ComplianceMandatory1']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D10', $result[0]['ComplianceMandatory2']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D11', $result[0]['RecordingDisclosure']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D12', $result[0]['AgeVerification']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D13', $result[0]['CharityPresentation']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D14', $result[0]['RafflesPresentation']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D15', $result[0]['ASK']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D16', $result[0]['VerificationCustomers1']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D17', $result[0]['VerificationCustomers2']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D18', $result[0]['VerificationCustomers3']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D19', $result[0]['VerificationCustomers4']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D20', $result[0]['VerificationCustomers5']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D21', $result[0]['PackagePresentation']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D22', $result[0]['PaymentDetails']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D23', $result[0]['ClosingTransaction']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D24', $result[0]['CallHandling1']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D25', $result[0]['CallHandling2']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D26', $result[0]['Comm1']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D27', $result[0]['Comm2']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D28', $result[0]['Comm3']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D29', $result[0]['Comm4']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D30', $result[0]['StandardRebuttals1']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D31', $result[0]['StandardRebuttals2']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D32', $result[0]['ComplianceClosing']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D33', $result[0]['FatalErrors1']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D34', $result[0]['FatalErrors2']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D35', $result[0]['YesCounts']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D36', $result[0]['NoCounts']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D37', $result[0]['NACounts']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D38', $result[0]['AutoFail']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D39', $result[0]['QualityScore']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C7', $result[0]['ProcessedBy']);
        
        $filename='UK RAFFLES '.mt_rand(1,100000).'.xlsx'; //just some random filename
        if ( headers_sent() ) die("**Error: headers sent");
  
        header('Content-Type: application/vnd.ms-excel');
        header('Cache-Control: max-age=0');
        header('Content-Description: File Transfer');   
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment; filename=" . $filename);    
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  //downloadable file is in Excel 2003 format (.xls)
        $objWriter->save('php://output');  //send it to user, of course you can save

    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ukraffles the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ukraffles::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Ukraffles $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ukraffles-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
