<?php

namespace Dashboardserver\Locale\Strategies;

abstract class AbstractStrategy
{
    abstract protected function getFolder();

    public function setHost($host)
    {
        $this->host = $host;
    }

    public function setServerEnv($server)
    {
        $this->server = $server;
    }
}
