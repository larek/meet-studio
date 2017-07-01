<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Images;
use yii\imagine\Image;
use app\models\Projects;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $model = Projects::find()->orderBy(['id' => SORT_DESC])->limit(5)->all();
        return $this->render('index',[
                'model' => $model, 
            ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionDecor(){
        return $this->render('decor');
    }

    public function actionDecorSingle($id){
        return $this->render('decor-single-'.$id);
    }

    public function actionFurniture(){
        return $this->render('furniture');
    }

    public function actionFurnitureSingle($id){
        return $this->render('furniture-single-'.$id);
    }

    public function actionService(){
        return $this->render('service');
    }

    public function actionServiceSingle($id){
        return $this->render('service-single-'.$id);
    }

    public function actionRealProject(){
        return $this->render('real-project');
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    // Callback event
    public function actionCallback(){
        $name = $_POST['data']['name'];
        $contact = $_POST['data']['contact'];
        $result = Yii::$app->mail->compose('layouts/callback',['name' => $name,'contact' => $contact])
                ->setFrom(['saitom@yandex.ru' => 'meet-studio.ru'])
                ->setTo(['t9101029991@gmail.com'])
                ->setSubject('Обратная связь с сайта meet-studio.ru / '.date("Y-m-d h:i:s"))
                ->send();
        echo json_encode($result);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionUpload(){
        return $this->render('upload');
    }
    
    public function actionUploader(){
        
        $output_dir = "uploads/";
        if(isset($_FILES["myfile"]))
        {
        	$ret = array();
        	
        //	This is for custom errors;	
        /*	$custom_error= array();
        	$custom_error['jquery-upload-file-error']="File already exists";
        	echo json_encode($custom_error);
        	die();
        */
        	$error =$_FILES["myfile"]["error"];
        	//You need to handle  both cases
        	//If Any browser does not support serializing of multiple files using FormData() 
        	if(!is_array($_FILES["myfile"]["name"])) //single file
        	{
        	    $info = pathinfo($_FILES["myfile"]["name"]);
        	    $basenameNewFile =  md5(time().$info['filename']);
        	    $newFile =$basenameNewFile.".jpg";
        	    $fileName = $basenameNewFile. "." .$info['extension'];
         		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
         		
        	    $mode = \Imagine\Image\ManipulatorInterface::THUMBNAIL_OUTBOUND; // or THUMBNAIL_INSET
        	    $img = $_SERVER['DOCUMENT_ROOT']."uploads/".$fileName;
                Image::thumbnail($img, 100, 100, $mode)->save('uploads/100x100/'. $newFile, ['quality' => 100]);
                Image::thumbnail($img, 240, 180, $mode)->save('uploads/240x180/'. $newFile, ['quality' => 100]);
            	
            	$model = new Images();
            	$model->img = $newFile;
            	$model->save();
            	
            	$ret[]= $newFile;
        	}
        	else  //Multiple files, file[]
        	{
        	  $fileCount = count($_FILES["myfile"]["name"]);
        	  for($i=0; $i < $fileCount; $i++)
        	  {
        	  	$fileName = $_FILES["myfile"]["name"][$i];
        		move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
        	  	$ret[]= $fileName;
        	  }
        	
        	}
            
            echo json_encode($ret);
         }
    }
}
