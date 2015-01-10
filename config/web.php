<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

return [
    'id' => 'basic',
    'name' => 'Pink Cities',
    'basePath' => dirname(__DIR__),
    'homeUrl' => '/',
    'extensions' => require __DIR__ . '/../vendor/yiisoft/extensions.php',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'pink-cities'
        ],
        'user' => [
            'identityClass' => 'App\Models\User',
            'enableAutoLogin' => true
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>'
            ]
        ],
        'view' => [
            'theme' => [
                'pathMap' => ['@app/views' => '@app/themes/classic'],
                'baseUrl' => '@web/themes/classic'
            ]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ]
            ]
        ],
        'db' => $db
    ],
    'modules' => [
    ],
    'params' => $params
];