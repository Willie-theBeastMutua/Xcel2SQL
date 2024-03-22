<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hei_survey".
 *
 * @property string|null $Response
 * @property string|null $Submitted on
 * @property string|null $Institution
 * @property string|null $Course
 * @property string|null $Group
 * @property string $ID
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
 * @property string|null $Q00_Cadre
 * @property string|null $Q00_Carder-other
 * @property string|null $Q00_Level of service support
 * @property string|null $Q00_Other levels HC support
 * @property string|null $Q00_County
 * @property string|null $Q00_More than one county
 * @property string|null $Q00_Sub county
 * @property string|null $Q00_Health facility
 * @property string|null $Q00_MFLCode
 * @property string|null $Q00_Experience in health sector
 * @property string|null $Q00_Experience in HIV response
 * @property string|null $Q01_eCourse registration
 * @property string|null $Q02_Motivations for eLearning
 * @property string|null $Q03_Level of access->1
 * @property string|null $Q03_Level of access->2
 * @property string|null $Q03_Level of access->3
 * @property string|null $Q03_Level of access->4
 * @property string|null $Q03_Level of access->5
 * @property string|null $Q04_Level of Confidence in IT->1
 * @property string|null $Q04_Level of Confidence in IT->2
 * @property string|null $Q04_Level of Confidence in IT->3
 * @property string|null $Q04_Level of Confidence in IT->4
 * @property string|null $Q04_Level of Confidence in IT->5
 * @property string|null $Q05_Time in a day
 * @property string|null $Q06_Difficulties for the course->1
 * @property string|null $Q06_Difficulties for the course->2
 * @property string|null $Q06_Difficulties for the course->3
 * @property string|null $Q06_Difficulties for the course->4
 * @property string|null $Q07_Support needed->1
 * @property string|null $Q07_Support needed->2
 * @property string|null $Q07_Support needed->3
 * @property string|null $Q07_Support needed->4
 * @property string|null $Q07_Support needed->5
 * @property string|null $Q07_Support needed->6
 * @property string|null $Q08_Time of the day->1
 * @property string|null $Q08_Time of the day->2
 * @property string|null $Q08_Time of the day->3
 * @property string|null $Q08_Time of the day->4
 * @property string|null $Q08_Time of the day->5
 * @property string|null $Q08_Time of the day->6
 * @property string|null $Q08_Time of the day->7
 * @property string|null $Q08_Time of the day->8
 * @property string $createdTime
 * @property string $updatedTime
 * @property string|null $deletedTime
 * @property int $createdBy
 * @property int $deleted
 */
class HeiSurvey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hei_survey';
    }

    public function fields()
	{
		return [
            'Response',
            'Submitted on',
            'Institution',
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
            'Q00_Cadre',
            'Q00_Carder-other',
            'Q00_Level of service support',
            'Q00_Other levels HC support',
            'Q00_County',
            'Q00_More than one county',
            'Q00_Sub county',
            'Q00_Health facility',
            'Q00_MFLCode',
            'Q00_Experience in health sector',
            'Q00_Experience in HIV response',
            'Q01_eCourse registration',
            'Q02_Motivations for eLearning',
            'Q03_Level of access->1',
            'Q03_Level of access->2',
            'Q03_Level of access->3',
            'Q03_Level of access->4',
            'Q03_Level of access->5',
            'Q04_Level of Confidence in IT->1',
            'Q04_Level of Confidence in IT->2',
            'Q04_Level of Confidence in IT->3',
            'Q04_Level of Confidence in IT->4',
            'Q04_Level of Confidence in IT->5',
            'Q05_Time in a day',
            'Q06_Difficulties for the course->1',
            'Q06_Difficulties for the course->2',
            'Q06_Difficulties for the course->3',
            'Q06_Difficulties for the course->4',
            'Q07_Support needed->1',
            'Q07_Support needed->2',
            'Q07_Support needed->3',
            'Q07_Support needed->4',
            'Q07_Support needed->5',
            'Q07_Support needed->6',
            'Q08_Time of the day->1',
            'Q08_Time of the day->2',
            'Q08_Time of the day->3',
            'Q08_Time of the day->4',
            'Q08_Time of the day->5',
            'Q08_Time of the day->6',
            'Q08_Time of the day->7',
            'Q08_Time of the day->8',
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
		return parent::find()->andWhere(['=', 'hei_survey.deleted', 0]);
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
            [['Response', 'Submitted on', 'Institution', 'Course', 'Group', 'ID', 'Full name', 'Username', 'Q00_Full name', 'Q00_Email address', 'Q00', 'Q00_Sex', 'Q00_Education', 'Q00_Age', 'Q00_Country', 'Q00_Other country', 'Q00_Cadre', 'Q00_Carder-other', 'Q00_Level of service support', 'Q00_Other levels HC support', 'Q00_County', 'Q00_More than one county', 'Q00_Sub county', 'Q00_Health facility', 'Q00_MFLCode', 'Q00_Experience in health sector', 'Q00_Experience in HIV response', 'Q01_eCourse registration', 'Q03_Level of access->1', 'Q03_Level of access->2', 'Q03_Level of access->3', 'Q03_Level of access->4', 'Q03_Level of access->5', 'Q04_Level of Confidence in IT->1', 'Q04_Level of Confidence in IT->2', 'Q04_Level of Confidence in IT->3', 'Q04_Level of Confidence in IT->4', 'Q04_Level of Confidence in IT->5', 'Q05_Time in a day', 'Q06_Difficulties for the course->1', 'Q06_Difficulties for the course->2', 'Q06_Difficulties for the course->3', 'Q06_Difficulties for the course->4', 'Q07_Support needed->1', 'Q07_Support needed->2', 'Q07_Support needed->3', 'Q07_Support needed->4', 'Q07_Support needed->5', 'Q07_Support needed->6', 'Q08_Time of the day->1', 'Q08_Time of the day->2', 'Q08_Time of the day->3', 'Q08_Time of the day->4', 'Q08_Time of the day->5', 'Q08_Time of the day->6', 'Q08_Time of the day->7', 'Q08_Time of the day->8'], 'string', 'max' => 200],
            [['Q02_Motivations for eLearning'], 'string', 'max' => 800],
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
            'Q00_Cadre' => 'Q00 Cadre',
            'Q00_Carder-other' => 'Q00 Carder Other',
            'Q00_Level of service support' => 'Q00 Level Of Service Support',
            'Q00_Other levels HC support' => 'Q00 Other Levels Hc Support',
            'Q00_County' => 'Q00 County',
            'Q00_More than one county' => 'Q00 More Than One County',
            'Q00_Sub county' => 'Q00 Sub County',
            'Q00_Health facility' => 'Q00 Health Facility',
            'Q00_MFLCode' => 'Q00 Mfl Code',
            'Q00_Experience in health sector' => 'Q00 Experience In Health Sector',
            'Q00_Experience in HIV response' => 'Q00 Experience In Hiv Response',
            'Q01_eCourse registration' => 'Q01 E Course Registration',
            'Q02_Motivations for eLearning' => 'Q02 Motivations For E Learning',
            'Q03_Level of access->1' => 'Q03 Level Of Access >1',
            'Q03_Level of access->2' => 'Q03 Level Of Access >2',
            'Q03_Level of access->3' => 'Q03 Level Of Access >3',
            'Q03_Level of access->4' => 'Q03 Level Of Access >4',
            'Q03_Level of access->5' => 'Q03 Level Of Access >5',
            'Q04_Level of Confidence in IT->1' => 'Q04 Level Of Confidence In It >1',
            'Q04_Level of Confidence in IT->2' => 'Q04 Level Of Confidence In It >2',
            'Q04_Level of Confidence in IT->3' => 'Q04 Level Of Confidence In It >3',
            'Q04_Level of Confidence in IT->4' => 'Q04 Level Of Confidence In It >4',
            'Q04_Level of Confidence in IT->5' => 'Q04 Level Of Confidence In It >5',
            'Q05_Time in a day' => 'Q05 Time In A Day',
            'Q06_Difficulties for the course->1' => 'Q06 Difficulties For The Course >1',
            'Q06_Difficulties for the course->2' => 'Q06 Difficulties For The Course >2',
            'Q06_Difficulties for the course->3' => 'Q06 Difficulties For The Course >3',
            'Q06_Difficulties for the course->4' => 'Q06 Difficulties For The Course >4',
            'Q07_Support needed->1' => 'Q07 Support Needed >1',
            'Q07_Support needed->2' => 'Q07 Support Needed >2',
            'Q07_Support needed->3' => 'Q07 Support Needed >3',
            'Q07_Support needed->4' => 'Q07 Support Needed >4',
            'Q07_Support needed->5' => 'Q07 Support Needed >5',
            'Q07_Support needed->6' => 'Q07 Support Needed >6',
            'Q08_Time of the day->1' => 'Q08 Time Of The Day >1',
            'Q08_Time of the day->2' => 'Q08 Time Of The Day >2',
            'Q08_Time of the day->3' => 'Q08 Time Of The Day >3',
            'Q08_Time of the day->4' => 'Q08 Time Of The Day >4',
            'Q08_Time of the day->5' => 'Q08 Time Of The Day >5',
            'Q08_Time of the day->6' => 'Q08 Time Of The Day >6',
            'Q08_Time of the day->7' => 'Q08 Time Of The Day >7',
            'Q08_Time of the day->8' => 'Q08 Time Of The Day >8',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
            'deletedTime' => 'Deleted Time',
            'createdBy' => 'Created By',
            'deleted' => 'Deleted',
        ];
    }
}
