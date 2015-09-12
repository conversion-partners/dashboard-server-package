<?php

namespace Dashboardserver\Server\Strategies;

abstract class AbstractServerStrategy
{
    abstract protected function getValue();

    public function setServerVars($server)
    {
        $this->server = $server;
    }

    public function getDomainLocaleFolder()
    {
        return $this->getValue();
    }
}
