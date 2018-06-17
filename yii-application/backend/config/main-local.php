<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '3aspwqxgwa4drm6XR53F1B2jKXxB5mT7',
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' =>  ['*']
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' =>  ['*'],
        'generators'=> [
            //重新定义gii model & crud的生成模板
            'module'=> [
                'class' => 'yii\gii\generators\module\Generator',
                'templates'=> [
                    'backend'=>'@yii/gii/generators/module/default'
                ]
            ],
            'model'=> [
                'class' => 'yii\gii\generators\model\Generator',
                'baseClass'=> 'yii\db\BaseActiveRecord',
                'ns'=> 'common\models',
                'templates'=> [
                    'common'=>'@common/gii/generators/model/default',
                    'backend'=>'@yii/gii/generators/model/backend'
                ]
            ],
            'crud'=> [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates'=> [
                    'backend'=>'@yii/gii/generators/crud/default'
                ],
                'baseControllerClass' => 'backend\controllers\BaseBackendController',
                'messageCategory'=> 'backend'
            ]
        ]
    ];
}

return $config;
