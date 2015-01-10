<?php
namespace app\controllers;

class SiteController extends \yii\web\Controller
{
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],

        ];
    }

    public function actionIndex() {
        $testimonials = \app\models\Testimonial::find()
            ->orderBy('RAND()')
            ->limit(3)
            ->all();

        return $this->render('index', ['testimonials' => $testimonials]);
    }
}