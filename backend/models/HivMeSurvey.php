<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hiv_me_survey".
 *
 * @property string|null $Response
 * @property string|null $Submitted on
 * @property string|null $Institution
 * @property string|null $Department
 * @property string|null $Course
 * @property string|null $Group
 * @property string|null $ID
 * @property string|null $Full name
 * @property string|null $Username
 * @property string|null $Q00_Full name
 * @property string|null $Q00_Email address
 * @property string|null $Q00
 * @property string|null $Q00_Sex
 * @property string|null $Q00_Education
 * @property string|null $Q00_Age
 * @property string|null $Q00_Country
 * @property string|null $Q00_Other country
 * @property string|null $Q00_Residence
 * @property string|null $Q00_Cadre
 * @property string|null $Q00_Carder-other
 * @property string|null $Q00_Level of service support
 * @property string|null $Q00_Other levels HC support
 * @property string|null $Q00_County
 * @property string|null $Q00_More than one county
 * @property string|null $Q00_Sub county
 * @property string|null $Q00_Health facility
 * @property string|null $Q00_MFLCode
 * @property string|null $Q00_Facility section
 * @property string|null $Q00_Facility section support
 * @property string|null $Q00_Facility department/unit
 * @property string|null $Q00_Experience in health sector
 * @property string|null $Q00_Experience in HIV response
 * @property string|null $Q01_Done face to face training
 * @property string|null $Q02_eCourse registration
 * @property string|null $Q03_Face to face vz eLearning
 * @property string|null $Q04_Reasons preferring face-face->1
 * @property string|null $Q04_Reasons preferring face-face->2
 * @property string|null $Q04_Reasons preferring face-face->3
 * @property string|null $Q04_Reasons preferring face-face->4
 * @property string|null $Q04_Reasons preferring face-face->5
 * @property string|null $Q04_Reasons preferring face-face->6
 * @property string|null $Q04_Reasons preferring face-face->7
 * @property string|null $Q05_Reasons preferring eLearning->1
 * @property string|null $Q05_Reasons preferring eLearning->2
 * @property string|null $Q05_Reasons preferring eLearning->3
 * @property string|null $Q05_Reasons preferring eLearning->4
 * @property string|null $Q05_Reasons preferring eLearning->5
 * @property string|null $Q06_Elearning vz face other
 * @property string|null $Q07_Motivation for course->1
 * @property string|null $Q07_Motivation for course->2
 * @property string|null $Q07_Motivation for course->3
 * @property string|null $Q07_Motivation for course->4
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
 * @property string|null $Q11_Period preference
 * @property string|null $Q12_Difficulties for the course->1
 * @property string|null $Q12_Difficulties for the course->2
 * @property string|null $Q12_Difficulties for the course->3
 * @property string|null $Q12_Difficulties for the course->4
 * @property string|null $Q13_Support needed->1
 * @property string|null $Q13_Support needed->2
 * @property string|null $Q13_Support needed->3
 * @property string|null $Q13_Support needed->4
 * @property string|null $Q13_Support needed->5
 * @property string|null $Q14_Time of the day->1
 * @property string|null $Q14_Time of the day->2
 * @property string|null $Q14_Time of the day->3
 * @property string|null $Q14_Time of the day->4
 * @property string|null $Q14_Time of the day->5
 * @property string $createdTime
 * @property string $updatedTime
 * @property string|null $deletedTime
 * @property int $createdBy
 * @property int $deleted
 */
class HivMeSurvey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hiv_me_survey';
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
            'Q00',
            'Q00_Sex',
            'Q00_Education',
            'Q00_Age',
            'Q00_Country',
            'Q00_Other country',
            'Q00_Residence',
            'Q00_Cadre',
            'Q00_Carder-other',
            'Q00_Level of service support',
            'Q00_Other levels HC support',
            'Q00_County',
            'Q00_More than one county',
            'Q00_Sub county',
            'Q00_Health facility',
            'Q00_MFLCode',
            'Q00_Facility section',
            'Q00_Facility section support',
            'Q00_Facility department/unit',
            'Q00_Experience in health sector',
            'Q00_Experience in HIV response',
            'Q01_Done face to face training',
            'Q02_eCourse registration',
            'Q03_Face to face vz eLearning',
            'Q04_Reasons preferring face-face->1',
            'Q04_Reasons preferring face-face->2',
            'Q04_Reasons preferring face-face->3',
            'Q04_Reasons preferring face-face->4',
            'Q04_Reasons preferring face-face->5',
            'Q04_Reasons preferring face-face->6',
            'Q04_Reasons preferring face-face->7',
            'Q05_Reasons preferring eLearning->1',
            'Q05_Reasons preferring eLearning->2',
            'Q05_Reasons preferring eLearning->3',
            'Q05_Reasons preferring eLearning->4',
            'Q05_Reasons preferring eLearning->5',
            'Q06_Elearning vz face other',
            'Q07_Motivation for course->1',
            'Q07_Motivation for course->2',
            'Q07_Motivation for course->3',
            'Q07_Motivation for course->4',
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
            'Q11_Period preference',
            'Q12_Difficulties for the course->1',
            'Q12_Difficulties for the course->2',
            'Q12_Difficulties for the course->3',
            'Q12_Difficulties for the course->4',
            'Q13_Support needed->1',
            'Q13_Support needed->2',
            'Q13_Support needed->3',
            'Q13_Support needed->4',
            'Q13_Support needed->5',
            'Q14_Time of the day->1',
            'Q14_Time of the day->2',
            'Q14_Time of the day->3',
            'Q14_Time of the day->4',
            'Q14_Time of the day->5',
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
		return parent::find()->andWhere(['=', 'hiv_me_survey.deleted', 0]);
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
            [['createdTime', 'updatedTime', 'deletedTime'], 'safe'],
            [['createdBy'], 'required'],
            [['createdBy', 'deleted'], 'integer'],
            [['Response', 'Submitted on', 'Institution', 'Department', 'Course', 'Group', 'ID', 'Full name', 'Username', 'Q00_Full name', 'Q00_Email address', 'Q00', 'Q00_Sex', 'Q00_Education', 'Q00_Age', 'Q00_Country', 'Q00_Other country', 'Q00_Residence', 'Q00_Cadre', 'Q00_Level of service support', 'Q00_County', 'Q00_More than one county', 'Q00_Sub county', 'Q00_Health facility', 'Q00_MFLCode', 'Q00_Experience in health sector', 'Q00_Experience in HIV response', 'Q01_Done face to face training', 'Q02_eCourse registration', 'Q03_Face to face vz eLearning', 'Q10_Time in a day', 'Q11_Period preference'], 'string', 'max' => 200],
            [['Q00_Carder-other', 'Q00_Facility department/unit', 'Q06_Elearning vz face other'], 'string', 'max' => 800],
            [['Q00_Other levels HC support', 'Q00_Facility section', 'Q00_Facility section support'], 'string', 'max' => 500],
            [['Q04_Reasons preferring face-face->1', 'Q04_Reasons preferring face-face->2', 'Q04_Reasons preferring face-face->3', 'Q04_Reasons preferring face-face->4', 'Q04_Reasons preferring face-face->5', 'Q04_Reasons preferring face-face->6', 'Q04_Reasons preferring face-face->7', 'Q05_Reasons preferring eLearning->1', 'Q05_Reasons preferring eLearning->2', 'Q05_Reasons preferring eLearning->3', 'Q05_Reasons preferring eLearning->4', 'Q05_Reasons preferring eLearning->5', 'Q07_Motivation for course->1', 'Q07_Motivation for course->2', 'Q07_Motivation for course->3', 'Q07_Motivation for course->4', 'Q08_Technology access->1', 'Q08_Technology access->2', 'Q08_Technology access->3', 'Q08_Technology access->4', 'Q08_Technology access->5', 'Q09_Level of Confidence in IT->1', 'Q09_Level of Confidence in IT->2', 'Q09_Level of Confidence in IT->3', 'Q09_Level of Confidence in IT->4', 'Q09_Level of Confidence in IT->5', 'Q12_Difficulties for the course->1', 'Q12_Difficulties for the course->2', 'Q12_Difficulties for the course->3', 'Q12_Difficulties for the course->4', 'Q13_Support needed->1', 'Q13_Support needed->2', 'Q13_Support needed->3', 'Q13_Support needed->4', 'Q13_Support needed->5', 'Q14_Time of the day->1', 'Q14_Time of the day->2', 'Q14_Time of the day->3', 'Q14_Time of the day->4', 'Q14_Time of the day->5'], 'string', 'max' => 45],
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
            'Q00' => 'Q00',
            'Q00_Sex' => 'Q00 Sex',
            'Q00_Education' => 'Q00 Education',
            'Q00_Age' => 'Q00 Age',
            'Q00_Country' => 'Q00 Country',
            'Q00_Other country' => 'Q00 Other Country',
            'Q00_Residence' => 'Q00 Residence',
            'Q00_Cadre' => 'Q00 Cadre',
            'Q00_Carder-other' => 'Q00 Carder Other',
            'Q00_Level of service support' => 'Q00 Level Of Service Support',
            'Q00_Other levels HC support' => 'Q00 Other Levels Hc Support',
            'Q00_County' => 'Q00 County',
            'Q00_More than one county' => 'Q00 More Than One County',
            'Q00_Sub county' => 'Q00 Sub County',
            'Q00_Health facility' => 'Q00 Health Facility',
            'Q00_MFLCode' => 'Q00 Mfl Code',
            'Q00_Facility section' => 'Q00 Facility Section',
            'Q00_Facility section support' => 'Q00 Facility Section Support',
            'Q00_Facility department/unit' => 'Q00 Facility Department/unit',
            'Q00_Experience in health sector' => 'Q00 Experience In Health Sector',
            'Q00_Experience in HIV response' => 'Q00 Experience In Hiv Response',
            'Q01_Done face to face training' => 'Q01 Done Face To Face Training',
            'Q02_eCourse registration' => 'Q02 E Course Registration',
            'Q03_Face to face vz eLearning' => 'Q03 Face To Face Vz E Learning',
            'Q04_Reasons preferring face-face->1' => 'Q04 Reasons Preferring Face Face >1',
            'Q04_Reasons preferring face-face->2' => 'Q04 Reasons Preferring Face Face >2',
            'Q04_Reasons preferring face-face->3' => 'Q04 Reasons Preferring Face Face >3',
            'Q04_Reasons preferring face-face->4' => 'Q04 Reasons Preferring Face Face >4',
            'Q04_Reasons preferring face-face->5' => 'Q04 Reasons Preferring Face Face >5',
            'Q04_Reasons preferring face-face->6' => 'Q04 Reasons Preferring Face Face >6',
            'Q04_Reasons preferring face-face->7' => 'Q04 Reasons Preferring Face Face >7',
            'Q05_Reasons preferring eLearning->1' => 'Q05 Reasons Preferring E Learning >1',
            'Q05_Reasons preferring eLearning->2' => 'Q05 Reasons Preferring E Learning >2',
            'Q05_Reasons preferring eLearning->3' => 'Q05 Reasons Preferring E Learning >3',
            'Q05_Reasons preferring eLearning->4' => 'Q05 Reasons Preferring E Learning >4',
            'Q05_Reasons preferring eLearning->5' => 'Q05 Reasons Preferring E Learning >5',
            'Q06_Elearning vz face other' => 'Q06 Elearning Vz Face Other',
            'Q07_Motivation for course->1' => 'Q07 Motivation For Course >1',
            'Q07_Motivation for course->2' => 'Q07 Motivation For Course >2',
            'Q07_Motivation for course->3' => 'Q07 Motivation For Course >3',
            'Q07_Motivation for course->4' => 'Q07 Motivation For Course >4',
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
            'Q11_Period preference' => 'Q11 Period Preference',
            'Q12_Difficulties for the course->1' => 'Q12 Difficulties For The Course >1',
            'Q12_Difficulties for the course->2' => 'Q12 Difficulties For The Course >2',
            'Q12_Difficulties for the course->3' => 'Q12 Difficulties For The Course >3',
            'Q12_Difficulties for the course->4' => 'Q12 Difficulties For The Course >4',
            'Q13_Support needed->1' => 'Q13 Support Needed >1',
            'Q13_Support needed->2' => 'Q13 Support Needed >2',
            'Q13_Support needed->3' => 'Q13 Support Needed >3',
            'Q13_Support needed->4' => 'Q13 Support Needed >4',
            'Q13_Support needed->5' => 'Q13 Support Needed >5',
            'Q14_Time of the day->1' => 'Q14 Time Of The Day >1',
            'Q14_Time of the day->2' => 'Q14 Time Of The Day >2',
            'Q14_Time of the day->3' => 'Q14 Time Of The Day >3',
            'Q14_Time of the day->4' => 'Q14 Time Of The Day >4',
            'Q14_Time of the day->5' => 'Q14 Time Of The Day >5',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
            'deletedTime' => 'Deleted Time',
            'createdBy' => 'Created By',
            'deleted' => 'Deleted',
        ];
    }
}
