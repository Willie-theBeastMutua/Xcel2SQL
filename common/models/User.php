<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $userId
 * @property string $firstName
 * @property string $lastName
 * @property string $mobile
 * @property string $email
 * @property integer $countryId
 * @property string $passwordHash
 * @property integer $resetCode
 * @property string $verificationCode
 * @property string $authKey
 * @property string $token
 * @property string $tokenExpiry
 * @property integer $userGroupId
 * @property integer $businessTypeId
 * @property integer $businessId
 * @property integer $userStatusId
 * @property integer $createdBy
 * @property integer $createdTime
 * @property integer $updateTime
 * @property integer $deletedTime
 * @property integer $deleted
 * @property integer $changePassword
 * @property string $password write-only password
 */

class User extends ActiveRecord implements IdentityInterface
{
	const STATUS_DELETED = 3;
	const STATUS_INACTIVE = 2;
	const STATUS_ACTIVE = 1;
	const GROUPS = [0, 1, 2];
	const API_GROUPS = [0, 1, 2, 3, 4];

	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return '{{%users}}';
	}

	/**
	 * {@inheritdoc}
	 */
	public function behaviors()
	{
		return [
			TimestampBehavior::className(),
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			['userStatusId', 'default', 'value' => self::STATUS_INACTIVE],
			['userStatusId', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public static function findIdentity($id)
	{
		return static::find()->andWhere(['=', 'users.deleted', 0])->andWhere(['userId' => $id, 'userStatusId' => self::STATUS_ACTIVE])->one();
	}

	/**
	 * {@inheritdoc}
	 */
	public static function findIdentityByAccessToken($token, $type = null)
	{
		return static::find()->andWhere(['=', 'users.deleted', 0])->andWhere(['authToken' => $token, 'userStatusId' => self::STATUS_ACTIVE])->one();
	}

	/**
	 * Finds user by username
	 *
	 * @param string $email
	 * @return static|null
	 */
	public static function findByUsername($username)
	{
		return static::find()->andWhere(['=', 'users.deleted', 0])->andWhere(['email' => $username, 'userStatusId' => self::STATUS_ACTIVE])->one();
	}

	/**
	 * Finds user by email
	 *
	 * @param string $email
	 * @return static|null
	 */
	public static function findByEmail($email)
	{
		return static::find()->andWhere(['=', 'users.deleted', 0])->andWhere(['email' => $email])->one();
	}

	/**
	 * Finds user by mobile
	 *
	 * @param string $mobile
	 * @return static|null
	 */
	public static function findByMobile($mobile)
	{
		return static::find()->andWhere(['=', 'users.deleted', 0])->andWhere(['mobile' => $mobile])->one();
	}

	/**
	 * Finds user by password reset token
	 *
	 * @param string $token password reset token
	 * @return static|null
	 */
	public static function findByPasswordResetToken($token)
	{
		if (!static::isPasswordResetTokenValid($token)) {
			return null;
		}

		return static::find()->andWhere(['=', 'users.deleted', 0])->andWhere(['resetCode' => $token, 'userStatusId' => self::STATUS_ACTIVE])->one();
	}

	/**
	 * Finds user by verification email token
	 *
	 * @param string $token verify email token
	 * @return static|null
	 */
	public static function findByVerificationToken($token)
	{
		return static::find()->andWhere(['=', 'users.deleted', 0])->andWhere(['verificationCode' => $token, 'userStatusId' => self::STATUS_INACTIVE])->one();
	}

	/**
	 * Finds out if password reset token is valid
	 *
	 * @param string $token password reset token
	 * @return bool
	 */
	public static function isPasswordResetTokenValid($token)
	{
		if (empty($token)) {
			return false;
		}

		$timestamp = (int) substr($token, strrpos($token, '_') + 1);
		$expire = Yii::$app->params['user.passwordResetTokenExpire'];
		return $timestamp + $expire >= time();
	}

	/**
	 * {@inheritdoc}
	 */
	public function getId()
	{
		return $this->getPrimaryKey();
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAuthKey()
	{
		return $this->authKey;
	}

	/**
	 * {@inheritdoc}
	 */
	public function validateAuthKey($authKey)
	{
		return $this->getAuthKey() === $authKey;
	}

	/**
	 * Validates password
	 *
	 * @param string $password password to validate
	 * @return bool if password provided is valid for current user
	 */
	public function validatePassword($password)
	{
		return Yii::$app->security->validatePassword($password, $this->passwordHash);
	}

	/**
	 * Generates password hash from password and sets it to the model
	 *
	 * @param string $password
	 */
	public function setPassword($password)
	{
		$this->passwordHash = Yii::$app->security->generatePasswordHash($password);
	}

	/**
	 * Generates "remember me" authentication key
	 */
	public function generateAuthKey()
	{
		$this->authKey = Yii::$app->security->generateRandomString();
	}

	/**
	 * Generates new password reset token
	 */
	public function generatePasswordResetToken()
	{
		$this->resetCode = rand(1000, 9999);
	}

	/**
	 * Generates new token for email verification
	 */
	public function generateEmailVerificationToken()
	{
		$this->verificationCode = rand(1000, 9999);
	}

	/**
	 * Removes password reset token
	 */
	public function removePasswordResetToken()
	{
		$this->resetCode = null;
	}
}
