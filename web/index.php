<?php
// comment out the following line to disable debug mode
defined('YII_DEBUG') or define('YII_DEBUG', true);

$frameworkPath = __DIR__ . '/../yii/vendor/yiisoft/yii2/yii';

require($frameworkPath . '/Yii.php');
// Register Composer autoloader
@include($frameworkPath . '/vendor/autoload.php');

Yii::$classMap['app\extensions\assetparser\Converter'] =__DIR__ . '/../yii/vendor/yiiext/assetparser/Converter.php';
Yii::$classMap['app\extensions\assetparser\Parser'] =__DIR__ . '/../yii/vendor/yiiext/assetparser/Parser.php';
Yii::$classMap['app\extensions\assetparser\Less'] =__DIR__ . '/../yii/vendor/yiiext/assetparser/Less.php';
Yii::$classMap['app\extensions\assetparser\Sass'] =__DIR__ . '/../yii/vendor/yiiext/assetparser/Sass.php';

$config = require(__DIR__ . '/../app/config/main.php');
$application = new yii\web\Application($config);
$application->run();
