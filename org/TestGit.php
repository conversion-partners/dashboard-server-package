<?php

require __DIR__.'/../vendor/autoload.php';

use SebastianBergmann\Git\Git as Git;

class TestGit extends \PHPUnit_Framework_TestCase
{
    public function testCheckout()
    {
        $git = new Git('/var/www/dashboard-server-package/data/testrepo/dashboard');
        $git->pull();
    }
}
