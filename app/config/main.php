<?php

return array(
	'id' => 'frenzelgmbh',
	'basePath' => dirname(__DIR__),
	'name' => 'Frenzel GmbH - Software Entwicklung, QlikView Consulting, Unternehmensplanung',
	'modules' => array(
		/*'gii'=>array(
			'class' => 'yii\components\gii',
			'password' => 'adm1n'
		),*/
	),

	'components' => array(
		'cache' => array(
			'class' => 'yii\caching\FileCache',
		),
		'db' => array(
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=test',
            'username' => 'root', 
            'password' => '',
		),
		'user' => array(
			'class' => 'yii\web\User',
			'identityClass' => 'app\models\User',
		),
		'assetManager' => array(
			'bundles' => require(__DIR__ . '/assets.php'),
		),
	),
	'params' => array(
		'adminEmail' => 'philipp@frenzel.net',
	),
);