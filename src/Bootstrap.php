<?php

namespace Lib;

//use \Lib\Module\Manager as ModuleManager;
use \SlimFacades\Facade;


class Bootstrap {
    
    protected $app;
    protected $config;
    
    public function __construct(\Slim\Slim $app = null) {
        $this->app = $app;   
    }
    
    public function setConfig($config) {
        $this->config = $config;
        foreach($config as $key => $value) {
            $this->app->config($key, $value);   
        }
    }
    
    public function setApp(\Slim\Slim $app) {
        $this->app = $app;   
    }
    
    public function boot() {
        $this->facade();
    }
    
    public function run() {
        $this->app->run();   
    }
    
    private function facade() {
        Facade::setFacadeApplication($this->app);
        Facade::registerAliases();
    }
    
    private function twig() {
        $view = $this->app->view;
        $view->parserOptions = $this->config['twig'];
        $view->parserExtensions = array(
            new \Slim\Views\TwigExtension()  
        );
    }
    
}