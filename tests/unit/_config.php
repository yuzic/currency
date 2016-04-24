<?php
$params = require(__DIR__ . '/../../config/params.php');
return [
    'id' => 'app-console',
    'class' => 'yii\console\Application',
    'basePath' => dirname(__DIR__) . '/../',
    'runtimePath' => \Yii::getAlias('@tests/_output'),
    'bootstrap' => [],
    'components' => [
        'db' => [
            'class' => '\yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=currency_test',
            'username' => 'root',
            'password' => 'virtc2012true',
        ]
    ],
    'params' => $params,
];