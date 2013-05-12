<?php
/**
 * Yii console bootstrap file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
defined('YII_DEBUG') or define('YII_DEBUG', true);

// fcgi doesn't have STDIN defined by default
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));

$frameworkPath = __DIR__ . '/../vendor/yiisoft/yii2/yii';

require($frameworkPath . '/Yii.php');
// Register Composer autoloader
@include(__DIR__ . '/../vendor/autoload.php');

$config = require(__DIR__ . '/../console/config/console.php');
$application = new yii\console\Application($config);
$application->run();
