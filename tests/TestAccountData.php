<?php

require __DIR__.'/../vendor/autoload.php';

class TestAccountData extends \PHPUnit_Framework_TestCase
{
    private $accountPath = '/var/www/dashboard-server-package/data/testrepo/dashboard/data/accounts/easydrain';

    public function testAccountData()
    {
        echo 'Testing account : ';
        exit;
        $server = array('REQUEST_URI' => '/contact.html','HTTP_HOST' => 'easydrain.nl');

        $account = new AccountData($accountPath);
        $account->setServerVars($server);

        $page = $account->getPage();
        print_r($page);
    }
}
