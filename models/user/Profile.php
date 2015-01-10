<?php
namespace app\models\User;

class Profile extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%profiles}}';
	}

	public function rules() {
		return [
			['dateOfBirth', 'date']
		];
	}

	public function getAge() {
		$now = new \DateTime();
		$dob = new \DateTime($this->dateOfBirth);
		return $dob->diff($now)->y;
	}

	public function getUser() {
		return $this->hasOne(\app\models\User::className(), ['id' => 'userId']);
	}
}