<?php
namespace app\models;

class FriendOfFriend extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%friends_of_friends}}';
	}
}