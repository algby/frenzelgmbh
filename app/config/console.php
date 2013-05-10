<?php

return array(
	'id' => 'frenzelgmbhconsole',
	'basePath' => dirname(__DIR__),
	'controllerPath' => '@yii/console/controllers',
	'components' => array(
		/*'db' => array(
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=test',
            'username' => 'root', 
            'password' => '',
		),*/
		'db' => array(
			'class' => 'yii\db\Connection',
			'dsn' => 'sqlite:'.dirname(__DIR__).'/data/frenzelgmbh.db',
		),
	),
	'params' => array(
		'adminEmail' => 'philipp@frenzel.net',
	),
);