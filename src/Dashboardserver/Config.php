<?php

namespace Dashboardserver;

class Config
{
    private $domains = null;
    private $origins = null;
    private $debug = null;
    private $localeStrategy = null;
    private $accountPath = null;

    public function setAccountPath($path)
    {
        $this->accountPath = $path;
    }

    public function setLocaleStrategy($strategy)
    {
        $object = new Locale\Strategies\DomainFolder();
        $this->localeStrategy = $object;
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
