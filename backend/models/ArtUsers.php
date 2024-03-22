<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "art_users".
 *
 * @property string $id
 * @property string|null $username
 * @property string|null $email
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $idnumber
 * @property string|null $institution
 * @property string|null $department
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $city
 * @property string|null $country
 * @property string|null $profile_field_countykenya
 * @property string|null $profile_field_orgname
 * @property string|null $profile_field_designation
 * @property string|null $profile_field_academicnew
 * @property string|null $profile_field_academicbackground
 * @property string|null $profile_field_fullname
 * @property string|null $profile_field_gender
 * @property string|null $profile_field_dob
 * @property string|null $profile_field_NationalID
 * @property string|null $profile_field_passportNo
 * @property string|null $profile_field_mobile
 * @property string|null $profile_field_expectations
 * @property string|null $profile_field_fileUpload
 * @property string|null $profile_field_icq
 * @property string|null $profile_field_skype
 * @property string|null $profile_field_aim
 * @property string|null $profile_field_yahoo
 * @property string|null $profile_field_msn
 * @property string|null $profile_field_url
 * @property string|null $createdTime
 * @property string|null $updatedTime
 * @property string|null $deletedTime
 * @property int|null $createdBy
 * @property int|null $deleted
 */
class ArtUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'art_users';
    }

    public function fields()
	{
		return [
            'id',
            'username',
            'email',
            'firstname',
            'lastname',
            'idnumber',
            'institution',
            'department',
            'phone1',
            'phone2',
            'city',
            'country',
            'profile_field_countykenya',
            'profile_field_orgname',
            'profile_field_designation',
            'profile_field_academicnew',
            'profile_field_academicbackground',
            'profile_field_fullname',
            'profile_field_gender',
            'profile_field_dob',
            'profile_field_NationalID',
            'profile_field_passportNo',
            'profile_field_mobile',
            'profile_field_expectations',
            'profile_field_fileUpload',
            'profile_field_icq',
            'profile_field_skype',
            'profile_field_aim',
            'profile_field_yahoo',
            'profile_field_msn',
            'profile_field_url',
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
		return parent::find()->andWhere(['=', 'art_users.deleted', 0]);
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
            [['id'], 'required'],
            [['createdTime', 'updatedTime', 'deletedTime'], 'safe'],
            [['createdBy', 'deleted'], 'integer'],
            [['id', 'username', 'email', 'firstname', 'lastname', 'idnumber', 'institution', 'department', 'phone1', 'phone2', 'city', 'country', 'profile_field_countykenya', 'profile_field_orgname', 'profile_field_designation', 'profile_field_academicnew', 'profile_field_academicbackground', 'profile_field_fullname', 'profile_field_gender', 'profile_field_dob', 'profile_field_NationalID', 'profile_field_passportNo', 'profile_field_mobile', 'profile_field_fileUpload', 'profile_field_icq', 'profile_field_skype', 'profile_field_aim', 'profile_field_yahoo', 'profile_field_msn', 'profile_field_url'], 'string', 'max' => 200],
            [['profile_field_expectations'], 'string', 'max' => 500],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'idnumber' => 'Idnumber',
            'institution' => 'Institution',
            'department' => 'Department',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'city' => 'City',
            'country' => 'Country',
            'profile_field_countykenya' => 'Profile Field Countykenya',
            'profile_field_orgname' => 'Profile Field Orgname',
            'profile_field_designation' => 'Profile Field Designation',
            'profile_field_academicnew' => 'Profile Field Academicnew',
            'profile_field_academicbackground' => 'Profile Field Academicbackground',
            'profile_field_fullname' => 'Profile Field Fullname',
            'profile_field_gender' => 'Profile Field Gender',
            'profile_field_dob' => 'Profile Field Dob',
            'profile_field_NationalID' => 'Profile Field National ID',
            'profile_field_passportNo' => 'Profile Field Passport No',
            'profile_field_mobile' => 'Profile Field Mobile',
            'profile_field_expectations' => 'Profile Field Expectations',
            'profile_field_fileUpload' => 'Profile Field File Upload',
            'profile_field_icq' => 'Profile Field Icq',
            'profile_field_skype' => 'Profile Field Skype',
            'profile_field_aim' => 'Profile Field Aim',
            'profile_field_yahoo' => 'Profile Field Yahoo',
            'profile_field_msn' => 'Profile Field Msn',
            'profile_field_url' => 'Profile Field Url',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
            'deletedTime' => 'Deleted Time',
            'createdBy' => 'Created By',
            'deleted' => 'Deleted',
        ];
    }
}
