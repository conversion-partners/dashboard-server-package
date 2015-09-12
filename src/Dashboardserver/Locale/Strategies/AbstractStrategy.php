<?php

namespace Dashboardserver\Locale\Strategies;

abstract class AbstractStrategy
{
    abstract protected function getValue();

    public function getDomainLocaleFolder()
    {
        return $this->getValue();
    }

    public function setServerEnv($server)
    {
        $this->server = $server;
    }
}
