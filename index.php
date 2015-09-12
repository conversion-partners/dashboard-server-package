<?php


include_once dirname(__FILE__).'/src/Dashboardserver/Config.php';
require __DIR__.'/vendor/autoload.php';
use Dashboardserver\Server;
use Dashboardserver\Config;

$config = new Config();
$config->setDebug(true);
$config->setDomains(array('easydrain.com' => 'easydrain', 'easydrain.nl' => 'easydrain'));
$config->setDomainAliases(array('www.easydrain.com' => 'easydrain.com', 'acceptance.easydrain.com' => 'easydrain.com'));
$config->setLocaleStrategy('DomainFolder');
$config->setServerStrategy('Nginx');
$config->setAccountPath('data/accounts/');

if ($config->getDebug()) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

$server_env = array(
  'HTTP_HOST' => 'easydrain.nl',
  'REQUEST_URI' => '/reference-hotels-w',
  );

$server = new Server($config, $server_env);
$server->init();
