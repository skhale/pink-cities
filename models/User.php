<?php
namespace app\models;

class Activity extends yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%users}}';
	}
}