<?php

require 'config/core.php';

require 'vendor/autoload.php';

use \Slim\Slim;
use \Lib\Bootstrap;

//load config
$config = require_once 'config/config.php';
 
$app = new Slim($config['slim']);

$bootstrap = new Bootstrap($app);
$bootstrap->setConfig($config);
$bootstrap->boot();

require_once 'config/routes.php';

//return bootstrap
return $bootstrap;