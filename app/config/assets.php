<?php

return array(
    'app' => array(
        'basePath' => '@wwwroot',
        'baseUrl' => '@www',
        'css' => array(
            'css/bootstrap.min.css',
            'css/bootstrap-responsive.min.css',
            'css/site.css',
            'less/modern.less',
        ),
        'js' => array(
            'js/tile-drag.js',
            'js/dropdown.js',
            'js/bootstrap.js',
            'js/pagecontrol.js',
            'js/accordion.js',
            'js/carousel.js',
        ),
        'depends' => array(
            'yii',
        ),
    ) 
);