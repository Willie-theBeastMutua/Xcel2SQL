<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ddiu_survey".
 *
 * @property string|null $Response
 * @property string|null $Submitted on
 * @property string|null $Institution
 * @property string|null $Department
 * @property string|null $Course
 * @property string|null $Group
 * @property string $ID
 * @property string|null $Full name
 * @property string|null $Username
 * @property string|null $Q00_Full name
 * @property string|null $Q00_Email address
 * @property string|null $Q00_Phone number
 * @property string|null $Q00_Sex
 * @property string|null $Q00_Education
 * @property string|null $Q00_Age
 * @property string|null $Q00_Country
 * @property string|null $Q00_Other country
 * @property string|null $Q00_Residence
 * @property string|null $Q00_Cadre
 * @property string|null $Q00_Carder student
 * @property string|null $Q00_Pre-service school
 * @property string|null $Q00_Student-year of study
 * @property string|null $Q00_Cadre-non-health
 * @property string|null $Q00_Level of service support
 * @property string|null $Q00_County
 * @property string|null $Q00_More than one county
 * @property string|null $Q00_Working outside kenya
 * @property string|null $Q00_Sub county
 * @property string|null $Q01_Facilty MFL
 * @property string|null $Q02_Facility without MFL
 * @property string|null $Q03_Experience in health sector
 * @property string|null $Q04_Experience in HIV response
 * @property string|null $Q05_eCourse registration
 * @property string|null $Q06_Online courses
 * @property string|null $Q07_Motivation for eLearning->1
 * @property string|null $Q07_Motivation for eLearning->2
 * @property string|null $Q07_Motivation for eLearning->3
 * @property string|null $Q07_Motivation for eLearning->4
 * @property string|null $Q07_Motivation for eLearning->5
 * @property string|null $Q07_Motivation for eLearning->6
 * @property string|null $Q07_Motivation for eLearning->7
 * @property string|null $Q07_Motivation for eLearning->8
 * @property string|null $Q07_Motivation for eLearning->9
 * @property string|null $Q07_Motivation for eLearning->10
 * @property string|null $Q07_Motivation for eLearning->11
 * @property string|null $Q07_Motivation for eLearning->12
 * @property string|null $Q08_Technology access->1
 * @property string|null $Q08_Technology access->2
 * @property string|null $Q08_Technology access->3
 * @property string|null $Q08_Technology access->4
 * @property string|null $Q08_Technology access->5
 * @property string|null $Q09_Level of Confidence in IT->1
 * @property string|null $Q09_Level of Confidence in IT->2
 * @property string|null $Q09_Level of Confidence in IT->3
 * @property string|null $Q09_Level of Confidence in IT->4
 * @property string|null $Q09_Level of Confidence in IT->5
 * @property string|null $Q10_Time in a day
 * @property string|null $Q11_Time of the day->1
 * @property string|null $Q11_Time of the day->2
 * @property string|null $Q11_Time of the day->3
 * @property string|null $Q11_Time of the day->4
 * @property string|null $Q11_Time of the day->5
 * @property string|null $Q11_Time of the day->6
 * @property string|null $Q11_Time of the day->7
 * @property string|null $Q11_Time of the day->8
 * @property string|null $Q12_Difficulties for the course->1
 * @property string|null $Q12_Difficulties for the course->2
 * @property string|null $Q12_Difficulties for the course->3
 * @property string|null $Q12_Difficulties for the course->4
 * @property string|null $Q13_Support needed->1
 * @property string|null $Q13_Support needed->2
 * @property string|null $Q13_Support needed->3
 * @property string|null $Q13_Support needed->4
 * @property string|null $Q13_Support needed->5
 * @property string|null $Q13_Support needed->6
 * @property string|null $Q14_Distractions
 * @property string|null $Q15_Attention
 * @property string $createdTime
 * @property string $updatedTime
 * @property string|null $deletedTime
 * @property int $createdBy
 * @property int $deleted
 */
class DdiuSurvey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ddiu_survey';
    }

    public function fields()
	{
		return [
            'Response',
            'Submitted on',
            'Institution',
            'Department',
            'Course',
            'Group',
            'ID',
            'Full name',
            'Username',
            'Q00_Full name',
            'Q00_Email address',
            'Q00_Phone number',
            'Q00_Sex',
            'Q00_Education',
            'Q00_Age',
            'Q00_Country',
            'Q00_Other country',
            'Q00_Residence',
            'Q00_Cadre',
            'Q00_Carder student',
            'Q00_Pre-service school',
            'Q00_Student-year of study',
            'Q00_Cadre-non-health',
            'Q00_Level of service support',
            'Q00_County',
            'Q00_More than one county',
            'Q00_Working outside kenya',
            'Q00_Sub county',
            'Q01_Facilty MFL',
            'Q02_Facility without MFL',
            'Q03_Experience in health sector',
            'Q04_Experience in HIV response',
            'Q05_eCourse registration',
            'Q06_Online courses',
            'Q07_Motivation for eLearning->1',
            'Q07_Motivation for eLearning->2',
            'Q07_Motivation for eLearning->3',
            'Q07_Motivation for eLearning->4',
            'Q07_Motivation for eLearning->5',
            'Q07_Motivation for eLearning->6',
            'Q07_Motivation for eLearning->7',
            'Q07_Motivation for eLearning->8',
            'Q07_Motivation for eLearning->9',
            'Q07_Motivation for eLearning->10',
            'Q07_Motivation for eLearning->11',
            'Q07_Motivation for eLearning->12',
            'Q08_Technology access->1',
            'Q08_Technology access->2',
            'Q08_Technology access->3',
            'Q08_Technology access->4',
            'Q08_Technology access->5',
            'Q09_Level of Confidence in IT->1',
            'Q09_Level of Confidence in IT->2',
            'Q09_Level of Confidence in IT->3',
            'Q09_Level of Confidence in IT->4',
            'Q09_Level of Confidence in IT->5',
            'Q10_Time in a day',
            'Q11_Time of the day->1',
            'Q11_Time of the day->2',
            'Q11_Time of the day->3',
            'Q11_Time of the day->4',
            'Q11_Time of the day->5',
            'Q11_Time of the day->6',
            'Q11_Time of the day->7',
            'Q11_Time of the day->8',
            'Q12_Difficulties for the course->1',
            'Q12_Difficulties for the course->2',
            'Q12_Difficulties for the course->3',
            'Q12_Difficulties for the course->4',
            'Q13_Support needed->1',
            'Q13_Support needed->2',
            'Q13_Support needed->3',
            'Q13_Support needed->4',
            'Q13_Support needed->5',
            'Q13_Support needed->6',
            'Q14_Distractions',
            'Q15_Attention',
            'createdTime',
            'updatedTime',
            'deletedTime',
            'createdBy',
            'deleted',
        ];
	}

	public function extraFields()
	{        
		return [
    ];
	}

    /**
	 * Added by Joseph Ngugi
	 * Filter Deleted Items
	 */
	public static function find()
	{
		return parent::find()->andWhere(['=', 'ddiu_survey.deleted', 0]);
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
            [['ID', 'createdBy'], 'required'],
            [['createdTime', 'updatedTime', 'deletedTime'], 'safe'],
            [['createdBy', 'deleted'], 'integer'],
            [['Response', 'Submitted on', 'Institution', 'Department', 'Course', 'Group', 'ID', 'Full name', 'Username', 'Q00_Full name', 'Q00_Email address', 'Q00_Phone number', 'Q00_Sex', 'Q00_Education', 'Q00_Age', 'Q00_Country', 'Q00_Other country', 'Q00_Residence', 'Q00_Cadre', 'Q00_Carder student', 'Q00_Pre-service school', 'Q00_Student-year of study', 'Q00_Cadre-non-health', 'Q00_Level of service support', 'Q00_County', 'Q00_More than one county', 'Q00_Working outside kenya', 'Q00_Sub county', 'Q01_Facilty MFL', 'Q02_Facility without MFL', 'Q03_Experience in health sector', 'Q04_Experience in HIV response', 'Q05_eCourse registration', 'Q06_Online courses', 'Q07_Motivation for eLearning->1', 'Q07_Motivation for eLearning->2', 'Q07_Motivation for eLearning->3', 'Q07_Motivation for eLearning->4', 'Q07_Motivation for eLearning->5', 'Q07_Motivation for eLearning->6', 'Q07_Motivation for eLearning->7', 'Q07_Motivation for eLearning->8', 'Q07_Motivation for eLearning->9', 'Q07_Motivation for eLearning->10', 'Q07_Motivation for eLearning->11', 'Q07_Motivation for eLearning->12', 'Q08_Technology access->1', 'Q08_Technology access->2', 'Q08_Technology access->3', 'Q08_Technology access->4', 'Q08_Technology access->5', 'Q09_Level of Confidence in IT->1', 'Q09_Level of Confidence in IT->2', 'Q09_Level of Confidence in IT->3', 'Q09_Level of Confidence in IT->4', 'Q09_Level of Confidence in IT->5', 'Q10_Time in a day', 'Q11_Time of the day->1', 'Q11_Time of the day->2', 'Q11_Time of the day->3', 'Q11_Time of the day->4', 'Q11_Time of the day->5', 'Q11_Time of the day->6', 'Q11_Time of the day->7', 'Q11_Time of the day->8', 'Q12_Difficulties for the course->1', 'Q12_Difficulties for the course->2', 'Q12_Difficulties for the course->3', 'Q12_Difficulties for the course->4', 'Q13_Support needed->1', 'Q13_Support needed->2', 'Q13_Support needed->3', 'Q13_Support needed->4', 'Q13_Support needed->5', 'Q13_Support needed->6', 'Q14_Distractions', 'Q15_Attention'], 'string', 'max' => 200],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Response' => 'Response',
            'Submitted on' => 'Submitted On',
            'Institution' => 'Institution',
            'Department' => 'Department',
            'Course' => 'Course',
            'Group' => 'Group',
            'ID' => 'ID',
            'Full name' => 'Full Name',
            'Username' => 'Username',
            'Q00_Full name' => 'Q00 Full Name',
            'Q00_Email address' => 'Q00 Email Address',
            'Q00_Phone number' => 'Q00 Phone Number',
            'Q00_Sex' => 'Q00 Sex',
            'Q00_Education' => 'Q00 Education',
            'Q00_Age' => 'Q00 Age',
            'Q00_Country' => 'Q00 Country',
            'Q00_Other country' => 'Q00 Other Country',
            'Q00_Residence' => 'Q00 Residence',
            'Q00_Cadre' => 'Q00 Cadre',
            'Q00_Carder student' => 'Q00 Carder Student',
            'Q00_Pre-service school' => 'Q00 Pre Service School',
            'Q00_Student-year of study' => 'Q00 Student Year Of Study',
            'Q00_Cadre-non-health' => 'Q00 Cadre Non Health',
            'Q00_Level of service support' => 'Q00 Level Of Service Support',
            'Q00_County' => 'Q00 County',
            'Q00_More than one county' => 'Q00 More Than One County',
            'Q00_Working outside kenya' => 'Q00 Working Outside Kenya',
            'Q00_Sub county' => 'Q00 Sub County',
            'Q01_Facilty MFL' => 'Q01 Facilty Mfl',
            'Q02_Facility without MFL' => 'Q02 Facility Without Mfl',
            'Q03_Experience in health sector' => 'Q03 Experience In Health Sector',
            'Q04_Experience in HIV response' => 'Q04 Experience In Hiv Response',
            'Q05_eCourse registration' => 'Q05 E Course Registration',
            'Q06_Online courses' => 'Q06 Online Courses',
            'Q07_Motivation for eLearning->1' => 'Q07 Motivation For E Learning >1',
            'Q07_Motivation for eLearning->2' => 'Q07 Motivation For E Learning >2',
            'Q07_Motivation for eLearning->3' => 'Q07 Motivation For E Learning >3',
            'Q07_Motivation for eLearning->4' => 'Q07 Motivation For E Learning >4',
            'Q07_Motivation for eLearning->5' => 'Q07 Motivation For E Learning >5',
            'Q07_Motivation for eLearning->6' => 'Q07 Motivation For E Learning >6',
            'Q07_Motivation for eLearning->7' => 'Q07 Motivation For E Learning >7',
            'Q07_Motivation for eLearning->8' => 'Q07 Motivation For E Learning >8',
            'Q07_Motivation for eLearning->9' => 'Q07 Motivation For E Learning >9',
            'Q07_Motivation for eLearning->10' => 'Q07 Motivation For E Learning >10',
            'Q07_Motivation for eLearning->11' => 'Q07 Motivation For E Learning >11',
            'Q07_Motivation for eLearning->12' => 'Q07 Motivation For E Learning >12',
            'Q08_Technology access->1' => 'Q08 Technology Access >1',
            'Q08_Technology access->2' => 'Q08 Technology Access >2',
            'Q08_Technology access->3' => 'Q08 Technology Access >3',
            'Q08_Technology access->4' => 'Q08 Technology Access >4',
            'Q08_Technology access->5' => 'Q08 Technology Access >5',
            'Q09_Level of Confidence in IT->1' => 'Q09 Level Of Confidence In It >1',
            'Q09_Level of Confidence in IT->2' => 'Q09 Level Of Confidence In It >2',
            'Q09_Level of Confidence in IT->3' => 'Q09 Level Of Confidence In It >3',
            'Q09_Level of Confidence in IT->4' => 'Q09 Level Of Confidence In It >4',
            'Q09_Level of Confidence in IT->5' => 'Q09 Level Of Confidence In It >5',
            'Q10_Time in a day' => 'Q10 Time In A Day',
            'Q11_Time of the day->1' => 'Q11 Time Of The Day >1',
            'Q11_Time of the day->2' => 'Q11 Time Of The Day >2',
            'Q11_Time of the day->3' => 'Q11 Time Of The Day >3',
            'Q11_Time of the day->4' => 'Q11 Time Of The Day >4',
            'Q11_Time of the day->5' => 'Q11 Time Of The Day >5',
            'Q11_Time of the day->6' => 'Q11 Time Of The Day >6',
            'Q11_Time of the day->7' => 'Q11 Time Of The Day >7',
            'Q11_Time of the day->8' => 'Q11 Time Of The Day >8',
            'Q12_Difficulties for the course->1' => 'Q12 Difficulties For The Course >1',
            'Q12_Difficulties for the course->2' => 'Q12 Difficulties For The Course >2',
            'Q12_Difficulties for the course->3' => 'Q12 Difficulties For The Course >3',
            'Q12_Difficulties for the course->4' => 'Q12 Difficulties For The Course >4',
            'Q13_Support needed->1' => 'Q13 Support Needed >1',
            'Q13_Support needed->2' => 'Q13 Support Needed >2',
            'Q13_Support needed->3' => 'Q13 Support Needed >3',
            'Q13_Support needed->4' => 'Q13 Support Needed >4',
            'Q13_Support needed->5' => 'Q13 Support Needed >5',
            'Q13_Support needed->6' => 'Q13 Support Needed >6',
            'Q14_Distractions' => 'Q14 Distractions',
            'Q15_Attention' => 'Q15 Attention',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
            'deletedTime' => 'Deleted Time',
            'createdBy' => 'Created By',
            'deleted' => 'Deleted',
        ];
    }
}
