<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../../vendor/autoload.php');
require(__DIR__ . '/../../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../config/aliases.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../framework/config/main-common.php'),
    require(__DIR__ . '/../../../framework/config/main-backend.php'),
    require(__DIR__ . '/../config/web-backend.php')
);

(new yii\web\Application($config))->run();