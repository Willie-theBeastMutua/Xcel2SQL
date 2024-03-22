<?php

namespace app\models;

use Yii;
use yii\helpers\FileHelper;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;
use PhpOffice\PhpSpreadsheet\IOFactory;
use app\models\ArtPreTest;


/**
 * This is the model class for table "elearning".
 *
 * @property int $ID
 * @property string $Name
 * @property string $Email address
 * @property string|null $Phone
 * @property string|null $Department
 * @property string|null $Institution
 * @property string|null $City/town
 * @property string|null $DDIU Cert Activation
 * @property string|null $DDIU course Pretest Quiz
 * @property string|null $DDIU course Pretest Quiz - Completion date
 * @property string|null $DDIU PostTest Quiz
 * @property string|null $DDIU PostTest Quiz - Completion date
 * @property string|null $Course complete
 * @property string $createdTime
 * @property string $updatedTime
 * @property string|null $deletedTime
 * @property int $createdBy
 * @property int $deleted
 */
class Elearning extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $excel;
    /**
     * @var string
     */
    public $course;

    /**
     * @var string
     */
    public $courseType;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'elearning';
    }

    public function fields()
    {
        return [
            'ID',
            'Name',
            'Email address',
            'Phone',
            'Department',
            'Institution',
            'City/town',
            'DDIU Cert Activation',
            'DDIU course Pretest Quiz',
            'DDIU course Pretest Quiz - Completion date',
            'DDIU PostTest Quiz',
            'DDIU PostTest Quiz - Completion date',
            'Course complete',
            'createdTime',
            'updatedTime',
            'deletedTime',
            'createdBy',
            'deleted',
        ];
    }

    public function extraFields()
    {
        return [];
    }

    /**
     * Added by Joseph Ngugi
     * Filter Deleted Items
     */
    public static function find()
    {
        return parent::find()->andWhere(['=', 'elearning.deleted', 0]);
    }

    /**
     * Added by Joseph Ngugi
     * To be executed before delete
     */
    public function delete()
    {
        $m = parent::findOne($this->getPrimaryKey());
        $m->deleted = 1;
        $m->deletedTime = date('Y-m-d H:i:s');
        return $m->save();
    }

    /**
     * Added by Joseph Ngugi
     * To be executed before Save
     */
    public function save($runValidation = true, $attributeNames = null)
    {
        //this record is always new
        if ($this->isNewRecord) {
            $this->createdBy = Yii::$app->user->identity->userId;
        }
        return parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Name', 'Email address', 'createdBy'], 'required'],
            [['ID', 'createdBy', 'deleted'], 'integer'],
            [['createdTime', 'updatedTime', 'deletedTime'], 'safe'],
            [['Name', 'Phone', 'Course complete'], 'string', 'max' => 45],
            [['Email address', 'Department', 'Institution', 'City/town', 'DDIU Cert Activation', 'DDIU course Pretest Quiz', 'DDIU course Pretest Quiz - Completion date', 'DDIU PostTest Quiz', 'DDIU PostTest Quiz - Completion date'], 'string', 'max' => 255],
            [['ID'], 'unique'],
            [['Email address'], 'unique'],
            [['excel'], 'file', 'extensions' => 'csv xls, xlsx'],
            [['course', 'courseType'], 'safe'],


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Email address' => 'Email Address',
            'Phone' => 'Phone',
            'Department' => 'Department',
            'Institution' => 'Institution',
            'City/town' => 'City/town',
            'DDIU Cert Activation' => 'Ddiu Cert Activation',
            'DDIU course Pretest Quiz' => 'Ddiu Course Pretest Quiz',
            'DDIU course Pretest Quiz - Completion date' => 'Ddiu Course Pretest Quiz   Completion Date',
            'DDIU PostTest Quiz' => 'Ddiu Post Test Quiz',
            'DDIU PostTest Quiz - Completion date' => 'Ddiu Post Test Quiz   Completion Date',
            'Course complete' => 'Course Complete',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
            'deletedTime' => 'Deleted Time',
            'createdBy' => 'Created By',
            'deleted' => 'Deleted',
            'course' => 'Course',
            'courseType' => 'Course Type',


        ];
    }

    public function upload()
    {

        if ($this->excel) {
            $originalFileName = $this->excel->baseName . '.' . $this->excel->extension;

            $excelpath = Yii::getAlias('uploads/'. $originalFileName);
            if (!is_dir(dirname($excelpath))) {
                FileHelper::createDirectory(dirname($excelpath));
            }
            $this->excel->saveAs($excelpath);
            chmod($excelpath, 0644);
            $this->excel = null;

            return $excelpath;
        } else {
            // unset($this->excel);

            return false;
        }
    }
    public function headers($excelpath)
    {
        $file = $excelpath;
        $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file);
        // read the excel file
        $objReader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($file);
        // Read the first sheet of the excel
        $sheet = $objPHPExcel->getSheet(0);
        $data = $sheet->toArray(null, true, true, true);
        $headers = array_shift($data);
        return [$headers, $sheet, $data];
        // Load headers as table attributes
    }
    public function calc($course, $dataType)
    {
        // Upload and get file path uploaded
        $excelpath = YII::getAlias($this->upload());
        // print_r($course);
        // print_r($dataType);
        // exit;

        if ($excelpath) {
            [$headers, $uploadsheets, $data] = $this->headers($excelpath);
            $exTemplate = "templates/" . $course . "_" . $dataType . ".xlsx";
            [$exheaders, $exsheets, $exdata] = $this->headers($exTemplate);
            $words = ucwords(str_replace(['_', ' '], ' ', $course . "_" . $dataType));
            $camelCase = lcfirst(str_replace(' ', '', $words));
            $modelName = ucfirst($camelCase);
            $modelClass = 'app\\models\\' . $modelName;
            $findOne = false;

            if ($dataType == "pre_test" || $dataType == "post_test") {
                $findOne = "Email address";
            } elseif ($dataType == "survey") {
                $findOne = "Response";
            } elseif ($dataType == "users") {
                $findOne = "id";
            }
            // print_r($modelName);
            // exit;
            // Load headers as table attributes

            // $headers = array_shift($data);
            // ensure excel integrity by comparing headers to what is expected
            // print_r($findOne);
            //  
            // print_r(
            //     $headers);
            //     print("\n");

            // print_r($exheaders);
            // exit;               exit;
            if ($exheaders == $headers) {
                $highestrow =  $uploadsheets->getHighestRow();
                $count = 0;
                $existing = 0;
                // Loop through the excel entering data
                foreach ($data as $rowData) {
                    $rowData = array_map(function ($value) {
                        return str_replace('-', '0', $value);
                    }, $rowData);
                    //                     print_r(
                    // $rowData                    );
                    //                     exit;
                    $model = new $modelClass();

                    $model->attributes = array_combine($headers, $rowData);
                    
                    $existingModel = $modelClass::findOne([$findOne => $model->$findOne]);
                    // print_r($existingModel);
                    // exit;
                    if ($existingModel) {

                        $existing++;
                        continue;
                        // Yii::$app->session->setFlash('warning', 'Record with ID ' . $model->ID . ' already exists. Skipped.');
                    } else {
                        if ($model->save()) {
                            $count++;
                        }
                        else{

                        }
                    }
                }
                Yii::$app->session->setFlash('success', $highestrow . ' Total Records Found');

                Yii::$app->session->setFlash('success', $count . ' Records Imported Successfully');
                Yii::$app->session->setFlash('error', $existing . ' IDs already exist');
                unlink($excelpath);
                unset($excelpath);


                return true;
            } else {
                Yii::$app->session->setFlash('error', 'Excel Headers do not Match expected Headers Use provided template');
                // unset($this->excel);

            }
            // print("<prev>");
            // print_r("Existing" . $existing);
            // print("\n");

            // print("<prev>");
            // print_r($headers);
            // print("\n");

            // print_r($count);
            // exit;
        }


        return false;
    }
}
