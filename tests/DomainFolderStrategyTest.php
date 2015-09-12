<?php

require __DIR__.'/../vendor/autoload.php';

use Dashboardserver\Server as Server;
use Dashboardserver\Config as Config;

class DomainFolderStrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testAccountGetPageVersionData()
    {
        $config = new Config();
        $config->setDebug(true);
        $config->setDomains(array('easydrain.com' => 'easydrain', 'easydrain.nl' => 'easydrain'));
        $config->setOrigins(array('http://localhost:9090/' => 'active', 'http://localhost:9090/' => 'active'));
        $config->setLocaleStrategy('DomainFolder');
        $config->setAccountPath('data/accounts/');

        $accountName = 'easydrain';
        $account = new AccountData($accountName);

        $serverVars = array(
          'HTTP_HOST' => 'easydrain.nl',
          'REQUEST_URI' => '/reference-hotels-w',
          );

        $server = new Server();
        $server->setConfig($config);
        $server->setServerVars($serverVars);
        $server->setAccount($account);
        $server->start();
    }
}
