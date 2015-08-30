<?php

require_once __DIR__.'/../vendor/autoload.php';

namespace tests;

use SebastianBergmann\Git;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }

    public function testCheckout(){
      $git = new Git('https://github.com/conversion-partners/dashboard.git');
    }
}
