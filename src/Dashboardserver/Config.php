<?php

namespace Dashboardserver;


class Config
{
    private $domains = null;
    private $origins = null;
    private $debug = null;
    private $localeStrategy = null;

    public function setLocaleStrategy($strategy)
    {
        $className = $strategy;
        $object = new Dashboardserver\Locale\Strategies\$className();
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
