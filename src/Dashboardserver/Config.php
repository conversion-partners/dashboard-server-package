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
    private $requestDomain = null;

    public function getAccount()
    {
        $account = isset($this->domains[$this->requestDomain]) ? $this->domains[$this->requestDomain] : false;
        // if not check aliases
        return $account;
    }

    public function setRequestDomain($host)
    {
        $this->requestDomain = $host;
    }

    public function setAccountPath($path)
    {
        $this->accountPath = $path;
    }

    public function getAccountPath()
    {
        return $this->accountPath;
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

    public function getServerStrategy()
    {
        return $this->serverStrategy;
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
