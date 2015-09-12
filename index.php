<?php


include_once dirname(__FILE__).'/src/Dashboardserver/Config.php';

use Dashboardserver\Config as Config;

$config = new Config();
$config->setDebug(true);
$config->setDomains(array('easydrain.com' => 'easydrain', 'easydrain.nl' => 'easydrain'));
$config->setOrigins(array('http://localhost:9090/' => 'active', 'http://localhost:9090/' => 'active'));

if ($config->getDebug()) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

require __DIR__.'/vendor/autoload.php';
use Dashboardserver\Server;

$server = new Server();

$server->setConfig($config);
$server->setServerVars($_SERVER);
$server->start();
