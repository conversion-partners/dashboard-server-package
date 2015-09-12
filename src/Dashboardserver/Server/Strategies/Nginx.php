<?php

namespace Dashboardserver\Server\Strategies;

class Nginx extends AbstractServerStrategy
{
    public function getCleanServerEnv()
    {
        return $this->server;
    }
}
