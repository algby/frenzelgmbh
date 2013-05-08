<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);

require(__DIR__ . '/../vendor/yiisoft/yii2/framework/yii.php');

Yii::$classMap['app\extensions\assetparser\Converter'] =__DIR__ . '/../vendor/yiiext/assetparser/Converter.php';
Yii::$classMap['app\extensions\assetparser\Parser'] =__DIR__ . '/../vendor/yiiext/assetparser/Parser.php';
Yii::$classMap['app\extensions\assetparser\Less'] =__DIR__ . '/../vendor/yiiext/assetparser/Less.php';
Yii::$classMap['app\extensions\assetparser\Sass'] =__DIR__ . '/../vendor/yiiext/assetparser/Sass.php';

$config = require(__DIR__ . '/../app/config/main.php');

$application = new yii\web\Application($config);
$application->run();
