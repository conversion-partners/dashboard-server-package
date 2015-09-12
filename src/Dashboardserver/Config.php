<?php

namespace Dashboardserver;

class Config
{
    private $domains = null;
    private $domainAliases = null;
    private $debug = null;
    private $localeStrategy = null;
    private $serverStrategy = null;
    private $accountPath = null;

    public function setAccountPath($path)
    {
        $this->accountPath = $path;
    }

    public function setLocaleStrategy($strategy)
    {
        $class = 'Dashboardserver\Locale\Strategies\\'.$strategy;
        $this->localeStrategy = new $class();
    }

    public function setServerStrategy($strategy)
    {
        $class = 'Dashboardserver\Server\Strategies\\'.$strategy;
        $this->serverStrategy = new $class();
    }

    public function setDebug($debug)
    {
        if ($this->debug == null) {
            $this->debug = $debug;
        }

        return $this;
    }

    public function getDebug()
    {
        return $this->debug;
    }

    public function setDomainAliases($aliases)
    {
        $this->domainAliases = $aliases;
    }

    public function getDomains()
    {
        return $this->domains;
    }

    public function setDomains($domains)
    {
        if ($this->domains == null) {
            $this->domains = $domains;
        }

        return $this;
    }
}
