<?php

require __DIR__.'/../vendor/autoload.php';

use Dashboardserver\AccountData as AccountData;

class AccountDataTest extends \PHPUnit_Framework_TestCase
{
    public function testAccount()
    {
        echo 'Testing account : ';
        $accountPath = '/var/www/dashboard-server-package/data/testrepo/dashboard/data/accounts/easydrain';

        $server = array('REQUEST_URI' => '/contact.html','HTTP_HOST' => 'easydrain.nl');

        $account = new AccountData($accountPath);
        $account->setServerVars($server);

        $page = $account->getPageDir();
        print_r($page);
        $this->assertTrue(true);
    }
}
