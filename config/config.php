<?php

return array(
    'slim' => array(
        'modular'       => true,
        
        'mode'          => 'development',
        
        'debug'         => true,
        
        'view'          => new \Slim\Views\Twig(),
        'templates.path'=> APP_PATH.'/views',
    
    ),
    'twig' => array(
        'debug' => true,
        'cache' => APP_PATH.'/cache'
    ),
    
);