<?php
namespace app\models;

class Testimonial extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%testimonials}}';
	}
}