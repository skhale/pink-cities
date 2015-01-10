<?php
namespace app\models;

class User extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%users}}';
	}

	public function getProfile() {
		return $this->hasOne(\app\models\User\Profile::className(), ['userId' => 'id']);
	}

	public function getFriends() {
		return $this->hasMany(\app\models\User::className(), ['id' => 'friendId'])
			->viaTable('{{%friends}}', ['userId' => 'id']);
	}

	public function getFriendsOfFriends() {
		return $this->hasMany(\app\models\FriendOfFriend::className(), ['userId' => 'id'])
			->onCondition('friendId != :id AND userId = :id', [':id' => $this->id]);
	}
}