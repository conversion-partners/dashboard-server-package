<?php

require __DIR__.'/../vendor/autoload.php';

class TestTemplate extends \PHPUnit_Framework_TestCase
{
    private $accountData = '/var/www/dashboard-server-package/data/testrepo/dashboard/data/accounts/easydrain';

    public function testTemplate()
    {
        $template = "Welcome {{name}} , You win \${{value}} dollars!!\n";
        $phpStr = LightnCandy::compile($template);
        $renderer = LightnCandy::prepare($phpStr);
        $this->assertEquals(trim($renderer(array('name' => 'John', 'value' => 10000))), 'Welcome John , You win $10000 dollars!!');
    }
}
