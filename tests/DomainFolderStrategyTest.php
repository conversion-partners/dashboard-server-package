<?php

require __DIR__.'/../vendor/autoload.php';

use Dashboardserver\Server as Server;
use Dashboardserver\Config as Config;
use Dashboardserver\Account as Account;

class DomainFolderStrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testAccountGetPageVersionData()
    {
        $config = new Config();
        $config->setDebug(true);
        $config->setDomains(array('easydrain.com' => 'easydrain', 'easydrain.nl' => 'easydrain'));
        $config->setOrigins(array('http://localhost:9090/' => 'active', 'http://localhost:9090/' => 'active'));
        $config->setLocaleStrategy('DomainFolder');
        $config->setServerStrategy('Nginx');
        $config->setAccountPath('data/accounts/');

        $account = new Account('easydrain');

        $server_env = array(
          'HTTP_HOST' => 'easydrain.nl',
          'REQUEST_URI' => '/reference-hotels-w',
          );

        $server = new Server($config, $account, $server_env);
        $server->start();
        $locale = $server->getLocaleFolder();

        echo 'locale : '.$locale;
    }
}
