<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "art_pre_test".
 *
 * @property string|null $Last name
 * @property string|null $First name
 * @property string $Email address
 * @property string|null $City
 * @property string|null $Country
 * @property string|null $State
 * @property string|null $Started on
 * @property string|null $Completed
 * @property string|null $Time taken
 * @property string|null $Grade/100
 * @property string|null $Q1
 * @property string|null $Q2
 * @property string|null $Q3
 * @property string|null $Q4
 * @property string|null $Q5
 * @property string|null $Q6
 * @property string|null $Q7
 * @property string|null $Q8
 * @property string|null $Q9
 * @property string|null $Q10
 * @property string $createdTime
 * @property string $updatedTime
 * @property string|null $deletedTime
 * @property int $createdBy
 * @property int $deleted
 */
class ArtPreTest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'art_pre_test';
    }

    public function fields()
	{
		return [
            'Last name',
            'First name',
            'Email address',
            'City',
            'Country',
            'State',
            'Started on',
            'Completed',
            'Time taken',
            'Grade/100',
            'Q1',
            'Q2',
            'Q3',
            'Q4',
            'Q5',
            'Q6',
            'Q7',
            'Q8',
            'Q9',
            'Q10',
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
		return parent::find()->andWhere(['=', 'art_pre_test.deleted', 0]);
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
            [['Email address', 'createdBy'], 'required'],
            [['createdTime', 'updatedTime', 'deletedTime'], 'safe'],
            [['createdBy', 'deleted'], 'integer'],
            [['Last name', 'First name', 'Email address', 'City', 'Country', 'State', 'Started on', 'Completed', 'Time taken', 'Grade/100', 'Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7', 'Q8', 'Q9', 'Q10'], 'string', 'max' => 200],
            [['Email address'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Last name' => 'Last Name',
            'First name' => 'First Name',
            'Email address' => 'Email Address',
            'City' => 'City',
            'Country' => 'Country',
            'State' => 'State',
            'Started on' => 'Started On',
            'Completed' => 'Completed',
            'Time taken' => 'Time Taken',
            'Grade/100' => 'Grade/100',
            'Q1' => 'Q1',
            'Q2' => 'Q2',
            'Q3' => 'Q3',
            'Q4' => 'Q4',
            'Q5' => 'Q5',
            'Q6' => 'Q6',
            'Q7' => 'Q7',
            'Q8' => 'Q8',
            'Q9' => 'Q9',
            'Q10' => 'Q10',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
            'deletedTime' => 'Deleted Time',
            'createdBy' => 'Created By',
            'deleted' => 'Deleted',
        ];
    }
}
