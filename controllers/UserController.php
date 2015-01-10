<?php
namespace app\controllers;

class UserController extends \yii\web\Controller
{
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    public function actionDashboard() {
        $user = \app\models\User::findOne(1); // debugging - remove me

        return $this->render('dashboard', ['user' => $user]);
    }
}