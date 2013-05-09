<?php

return array(
	'id' => 'frenzelgmbh',
	'basePath' => dirname(__DIR__),
	'name' => 'Frenzel GmbH - Software Entwicklung, QlikView Consulting, Unternehmensplanung, Corporate Planning',
	'preload' => array('log'),
	'modules' => array(
		'debug' => array(
			'class' => 'yii\debug\Module',
		)
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
		'log' => array(
			'class' => 'yii\logging\Router',
			'targets' => array(
				'file' => array(
					'class' => 'yii\logging\FileTarget',
					'levels' => array('error', 'warning'),
				),
			),
		),
		'assetManager'=>array(
			'bundles' => require(__DIR__ . '/assets.php'),
			'converter'=>array(
                'class'=>'app\extensions\assetparser\Converter',
                'force'=>false,
                'parsers' => array(
                    'sass' => array( // file extension to parse
                        'class' => 'app\extensions\assetparser\Sass',
                        'output' => 'css', // parsed output file type
                        'options' => array(
                            'cachePath' => '@app/runtime/cache/sass-parser' // optional options
                        ),
                    ),
                    'scss' => array( // file extension to parse
                        'class' => 'app\extensions\assetparser\Sass',
                        'output' => 'css', // parsed output file type
                        'options' => array() // optional options
                    ),
                    'less' => array( // file extension to parse
                        'class' => 'app\extensions\assetparser\Less',
                        'output' => 'css', // parsed output file type
                        'options' => array(
                            'auto' => true // optional options
                        )
                    )
                )
			)
        )
	),
	'params' => array(
		'adminEmail' => 'philipp@frenzel.net',
	),
);