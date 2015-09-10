<?php


include_once dirname(__FILE__).'/config.php';
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
