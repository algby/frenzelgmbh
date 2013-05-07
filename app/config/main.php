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
		'converter'=>array(
                'class'=>'vendor\yii_ext\assetparser\Converter',
                'force'=>false,
                'parsers' => array(
                    /*'sass' => array( // file extension to parse
                        'class' => 'vendor\yii_ext\assetparser\Sass',
                        'output' => 'css', // parsed output file type
                        'options' => array(
                            'cachePath' => '@app/runtime/cache/sass-parser' // optional options
                        ),
                    ),
                    'scss' => array( // file extension to parse
                        'class' => 'vendor\yii_ext\assetparser\Sass',
                        'output' => 'css', // parsed output file type
                        'options' => array() // optional options
                    ),*/
                    'less' => array( // file extension to parse
                        'class' => 'vendor\yii_ext\assetparser\Less',
                        'output' => 'css', // parsed output file type
                        'options' => array(
                            'auto' => true // optional options
                        )
                    )
                )
        )
	),
	'params' => array(
		'adminEmail' => 'philipp@frenzel.net',
	),
);