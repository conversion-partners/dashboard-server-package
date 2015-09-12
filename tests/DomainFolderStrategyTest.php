<?php

require __DIR__.'/../vendor/autoload.php';

use Dashboardserver\Server as Server;

class DomainFolderStrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testAccountGetPageVersionData()
    {
        $accountPath = 'data/accounts/easydrain';
        $serverVars = array('REQUEST_URI' => '/reference-hotels-w','HTTP_HOST' => 'easydrain.nl');
        $server = new Server();
        $server->setConfig($config);
        $server->setServerVars($serverVars);
        $server->start();
    }
}
