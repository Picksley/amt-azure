<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
                    'logout' => ['post'],
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
    public function actionContactus()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contactus', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */


    public function actionAboutus()
    {
        return $this->render('aboutus');
    }
    public function actionMeettheteam()
    {
        return $this->render('meettheteam');
    }
    public function actionPersonalleasing()
    {
        return $this->render('personalleasing');
    }
    public function actionBusinessleasing()
    {
        return $this->render('businessleasing');
    }
    public function actionBlog()
    {
        return $this->render('blog');
    }
    public function actionMaintenance()
    {
        return $this->render('maintenance');
    }
    public function actionPartexchange()
    {
        return $this->render('partexchange');
    }
    public function actionSmartrack()
    {
        return $this->render('smartrack');
    }
    public function actionGapinsurance()
    {
        return $this->render('gapinsurance');
    }
    public function actionVanleasing()
    {
        return $this->render('vanleasing');
    }
    public function actionServices()
    {
        return $this->render('services');
    }
    public function actionWearandtear()
    {
        return $this->render('wearandtear');
    }
    public function actionBiktaxcalculator()
    {
        return $this->render('biktaxcalculator');
    }
    public function actionGlossary()
    {
        return $this->render('glossary');
    }
    public function actionLeasing()
    {
        return $this->render('leasing');
    }
    public function actionFuelcostcalculator()
    {
        return $this->render('fuelcostcalculator');
    }
    public function actionFaq()
    {
        return $this->render('faq');
    }
    public function actionTermsandconditions()
    {
      return $this->render('termsandconditions');
    }
    public function actionComplaintsprocedure()
    {
      return $this->render('complaintsprocedure');
    }
    public function actionTreatingcustomersfairly()
    {
      return $this->render('treatingcustomersfairly');
    }
    public function actionInitialdisclosure()
    {
      return $this->render('initialdisclosure');
    }
    public function actionPrivacypolicy()
    {
      return $this->render('privacypolicy');
    }
    public function actionWhatiscarleasing()
    {
        return $this->render('whatiscarleasing');
    }

    public function actionHowitworks()
    {
        return $this->render('howitworks');
    }
    public function actionFinanceoptions()
    {
        return $this->render('financeoptions');
    }
    public function actionAdvancedsearch()
    {
        return $this->render('advancedsearch');
    }
    public function actionSpecialoffers()
    {
        return $this->render('specialoffers');
    }
    public function actionDepreciation()
    {
        return $this->render('depreciation');
    }
    public function actionEndofcontract()
    {
        return $this->render('endofcontract');
    }
    public function actionMyshowroom()
    {
        return $this->render('myshowroom');
    }

    public function actionManulist()
    {
        $page = Yii::$app->db->createCommand('SELECT * FROM tblpages WHERE PageName="manufacturer"')->queryOne();
        $manulogos = Yii::$app->db->createCommand('SELECT * FROM tlogos WHERE fuktrading=1')->queryAll();


        return $this->render('manulist',array('page'=>$page,'manulogos'=>$manulogos));
    }
}
