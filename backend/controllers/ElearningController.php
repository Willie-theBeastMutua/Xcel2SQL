<?php

namespace backend\controllers;

use Yii;
use app\models\Elearning;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use backend\controllers\RightsController;
use yii\web\UploadedFile;


/**
 * ElearningController implements the CRUD actions for Elearning model.
 */
class ElearningController extends Controller
{
    public $rights;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $this->rights = RightsController::Permissions(18);

        $rightsArray = [];
        if (isset($this->rights->view)) {
            array_push($rightsArray, 'index', 'view', 'upload');
        }
        if (isset($this->rights->create)) {
            array_push($rightsArray, 'view', 'create', 'upload');
        }
        if (isset($this->rights->edit)) {
            array_push($rightsArray, 'index', 'view', 'update');
        }
        if (isset($this->rights->delete)) {
            array_push($rightsArray, 'delete');
        }
        $rightsArray = array_unique($rightsArray);

        if (count($rightsArray) <= 0) {
            $rightsArray = ['none'];
        }

        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'view', 'create', 'update', 'delete', 'upload'],
                'rules' => [
                    // Guest Users
                    [
                        'allow' => true,
                        'actions' => ['none'],
                        'roles' => ['?'],
                    ],
                  
                    // Authenticated Users
                    [
                        'allow' => true,
                        'actions' => $rightsArray, //['index', 'view', 'create', 'update', 'delete'],
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Elearning models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Elearning::find(),
            'pagination' => false,
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'rights' => $this->rights,
        ]);
    }

    /**
     * Displays a single Elearning model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'rights' => $this->rights,
        ]);
    }

    /**
     * Creates a new Elearning model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Elearning();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('create', [
            'model' => $model,
            'rights' => $this->rights,
        ]);
    }

    /**
     * Updates an existing Elearning model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
            'rights' => $this->rights,
        ]);
    }

    /**
     * Deletes an existing Elearning model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Elearning model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Elearning the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Elearning::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionUpload()
    {

        $model = new Elearning();
        $courseOptions = ['Option 1' => 'ART', 'Option 2' => 'DDIU', 'Option 3' => 'HEI', 'Option 4' => 'HIV M&E'];
        $dataOptions = ['Option 1' => 'Pre-Test Grades', 'Option 2' => 'Post-Test Grades ', 'Option 3' => 'Pre-Course Evaluation', 'Option 4' => 'Users'];

        if (Yii::$app->request->isPost) {
            Yii::$app->session->removeAllFlashes();
            $course = null;
            $datatype = null;

            $courseOption = Yii::$app->request->post('Elearning')['course'];
            $dataTypeOption = Yii::$app->request->post('Elearning')['courseType'];
            if ($courseOption == "Option 4") {
                $course = "hiv_me";
            } else {
                $course = strtolower($courseOptions[$courseOption]);
            }
            if ($dataTypeOption == "Option 1") {
                $dataType = "pre_test";
            } elseif ($dataTypeOption == "Option 2") {
                $dataType = "post_test";
            } elseif ($dataTypeOption == "Option 3") {
                $dataType = "survey";
            } elseif ($dataTypeOption == "Option 4") {
                $dataType = "users";
            }



            $model->excel = UploadedFile::getInstance($model, 'excel');

            if ($model->calc($course, $dataType)) {

                return $this->render(
                    'upload',
                    [
                        'model' => $model,
                        'courseOptions' => $courseOptions,
                        'dataOptions' => $dataOptions

                    ]
                );


                // return $this->actionAbout();        
            }
        }


        return $this->render('upload', ['model' => $model, 'courseOptions' => $courseOptions, 'dataOptions' => $dataOptions]);
    }
}
