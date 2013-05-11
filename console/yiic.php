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

$frameworkPath = __DIR__ . '/../vendor';

require($frameworkPath . '/yiisoft/yii2/yii/Yii.php');
// Register Composer autoloader
@include($frameworkPath . '/autoload.php');

$config = require(__DIR__ . '/../app/config/console.php');

$application = new yii\console\Application($config);
$application->run();
