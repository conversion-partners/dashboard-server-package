<?php

require __DIR__.'/../vendor/autoload.php';

use SebastianBergmann\Git\Git as Git;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }

    public function testCheckout()
    {
        $git = new Git('/var/www/dashboard-server-package/data/testrepo');
    }

    public function testTemplate()
    {
        $template = "Welcome {{name}} , You win \${{value}} dollars!!\n";
        $phpStr = LightnCandy::compile($template);
        $renderer = LightnCandy::prepare($phpStr);
        echo $renderer(array('name' => 'John', 'value' => 10000));
    }
}
