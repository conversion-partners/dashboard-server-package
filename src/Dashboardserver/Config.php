<?php

namespace Dashboardserver;

class Config
{
    private $domains = null;
    private $origins = null;
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

    public function getOrigins()
    {
        return $this->origins;
    }

    public function setOrigins($origins)
    {
        if ($this->origins == null) {
            $this->origins = $origins;
        }

        return $this;
    }
}
