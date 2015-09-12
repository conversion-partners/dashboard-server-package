<?php

require __DIR__.'/../vendor/autoload.php';

use Dashboardserver\AccountData as AccountData;

class AccountDataTest extends \PHPUnit_Framework_TestCase
{
    public function testAccount()
    {
        $accountPath = 'data/accounts/easydrain';
        $server = array('REQUEST_URI' => '/reference-hotels-w','HTTP_HOST' => 'easydrain.nl');
        $account = new AccountData($accountPath);
        $account->setServerVars($server);
        $page = $account->getPage();
        print_r($page);
        ////data/accounts/easydrain/sites/easydrain.nl_null-null/pages/contact/versions/version-one
        $this->assertTrue(true);
    }
    public function testNoPage()
    {
        $accountPath = 'data/accounts/easydrain';
        $server = array('REQUEST_URI' => '/no-contact.html','HTTP_HOST' => 'easydrain.nl');
        $account = new AccountData($accountPath);
        $account->setServerVars($server);
        $page = $account->getPage();
        $this->assertFalse($page);
    }
}
