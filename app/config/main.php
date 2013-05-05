<?php

return array(
	'id' => 'frenzelgmbh',
	'basePath' => dirname(__DIR__),
	'components' => array(
		'cache' => array(
			'class' => 'yii\caching\FileCache',
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