<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Pendaftaran;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
			$_SESSION['pengguna'] = "admin";
			return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
	
	public function actionPendaftaran()
	
	{
		 $model = new Pendaftaran();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
			$model->save();
			//Yii::$app->session->setFlash('success','Pendaftaran Berhasil, Silahkan lakukan pembayaran untuk melanjutkan proses pendaftaran');
            // form inputs are valid, do something here
            //return $this->redirect(['site/pendaftaran']);
            // form inputs are valid, do something here
            return $this->render('entry-confirm', ['model' => $model]);
        }
		
		else {
            // either the page is initially displayed or there is some validation error
            return $this->render('pendaftaran', ['model' => $model]);
        }
    }

    return $this->render('pendaftaran', [
        'model' => $model,
    ]);
    }
	
	public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			Yii::$app->getSession()->setFlash('success', 'Pendaftaran sukses');
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->redirect('entry-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('entry', ['model' => $model]);
        }
    }
	
	public function actionDaftarulang()
    {
        return $this->render('daftarulang');
    }
	
	public function actionMemberlist()
    {
        return $this->render('memberlist');
    }
	
}


