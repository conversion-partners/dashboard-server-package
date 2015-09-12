<?php

namespace Dashboardserver\Server\Strategies;

class Nginx extends AbstractServerStrategy
{
    public function getCleanServerEnv()
    {
        // use $this->server;  to fill $this->serverObject;
        $this->serverObject->setHost($this->server['HTTP_HOST']);

        return $this->serverObject;
    }
}
