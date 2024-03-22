<?php

namespace backend\controllers;

use Yii;
use app\models\Upload;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\data\ArrayDataProvider;
use common\models\LoginForm;
use app\models\ChangePassword;
// use app\models\Upload;
use app\models\Users;
use app\models\Data;
use app\models\Timesheets;
use app\models\Support;
use app\models\SupportSubjects;
use common\models\RegisterForm;
use app\models\Indicators;
use app\models\DashboardFilter;
use app\models\Counties;
use app\models\SubCounties;
use app\models\Facilities;
// use app\models\LoginForm;

use app\models\AssessmentFacilities;
use app\models\AssessmentSummary;
use app\models\AssessmentIndicators;
use app\models\Assessments;
use common\models\LoginForm as ModelsLoginForm;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use yii\db\mssql\PDO;
use yii\web\UploadedFile;


/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    //comment
    public $Cache;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'login', 'register', 'error', 'support', 'documentation', 'reset-password', 'upload',
                            'adultscascade', 'cascadecoverage', 'index', 'infographics', 'community',
                            'about-us', 'apis', 'load', 'dwh', 'cascade', 'currentonart', 'curroveral',
                            'khisdisag', 'cascadeup', 'uptakeclassification', 'uptakeclassificationtwo',
                            'uptakeclassificationtwo_filter', 'getsubcounties', 'paedscascade', 'paedsuptake',
                            'adultsuptake', 'cascadesummary', 'adolescentscascade', 'aypcascade', 'county-data',
                            'getfacilities',
                        ],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'change-password', 'support', 'documentation', 'dashboard', 'upload'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    // Add 'dsn' => 'mysql:host=localhost;port=3306;dbname=name' to parameters
    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('dashboard', [
            // ]);
            return $this->redirect(['login']);
        } else {
            return $this->render('dashboard', []);
        }
    }


    /**
     * Displays Community Page.
     *
     * @return string
     */
    public function actionCommunity()
    {
        return $this->render('community', []);
    }

    /**
     * Displays About Us Page.
     *
     * @return string
     */
    public function actionAboutUs()
    {
        return $this->render('about-us', []);
    }

    /**
     * Displays APIs Page.
     *
     * @return string
     */
    public function actionApis()
    {
        return $this->render('apis', []);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = $model->getCurrentUser();
            if ($user->changePassword) {
                return $this->redirect(['reset-password', 'id' => $user->userId]);
            } elseif ($model->login()) {

                return $this->goBack();
            }
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }



    public function actionChangePassword()
    {
        $model = new ChangePassword();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $userId = Yii::$app->user->identity->userId;
            $profile = Users::findOne($userId);
            $profile->passwordHash = Yii::$app->security->generatePasswordHash($model->Password);
            $profile->authKey = Yii::$app->security->generateRandomString();
            $profile->password = '0';
            $profile->password = $model->Password;
            $profile->confirmPassword = $model->ConfirmPassword;
            if ($profile->save()) {
                Yii::$app->session->setFlash('success', 'Password changed successfully.');
                return $this->redirect(['index']);
            } else {
                Yii::$app->session->setFlash('error', 'Failed to change password.');
            }
        }

        return $this->render('change-password', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($id)
    {
        $model = new ChangePassword();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $userId = $id;
            $profile = Users::findOne($userId);
            $profile->passwordHash = Yii::$app->security->generatePasswordHash($model->Password);
            $profile->authKey = Yii::$app->security->generateRandomString();
            $profile->Password = '0';
            $profile->Password = $model->Password;
            $profile->ConfirmPassword = $model->ConfirmPassword;
            $profile->changePassword = 0;
            if ($profile->save()) {
                Yii::$app->session->setFlash('success', 'Password changed successfully.');
                return $this->redirect(['index']);
            } else {
                Yii::$app->session->setFlash('error', 'Failed to change password.');
            }
        }

        return $this->render('change-password', [
            'model' => $model,
        ]);
    }

    public function actionSupport()
    {
        $model = new Support();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Your support Request has been received.');
            return $this->redirect(['support']);
        }

        $supportSubjects = ArrayHelper::map(SupportSubjects::find()->all(), 'supportSubjectId', 'supportSubjectName');
        $users = ArrayHelper::map(Users::find()->andWhere(['=', 'users.deleted', 0])->all(), 'userId', 'FullName');

        return $this->render('support', [
            'model' => $model,
            'supportSubjects' => $supportSubjects,
            'users' => $users,
        ]);
    }

    // upload Excel file
    public function actionUpload()
    {

        $model = new LoginForm();

        if (Yii::$app->request->isPost) {
            Yii::$app->session->removeAllFlashes();


            $model->excel = UploadedFile::getInstance($model, 'excel');

            if ($model->calc()) {

                return $this->render('upload', ['model' => $model]);


                // return $this->actionAbout();        
            }
        }


        return $this->render('upload', ['model' => $model]);
    }
}
