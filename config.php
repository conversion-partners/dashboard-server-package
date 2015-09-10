<?php

class Config
{
    private $domains = null;
    private $origins = null;
    private $debug = null;

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

$config = new Config();
$config->setDebug(true);
$config->setDomains(array('easydrain.com' => 'easydrain', 'easydrain.nl' => 'easydrain'));
$config->setOrigins(array('http://localhost:9090/' => 'active', 'http://localhost:9090/' => 'active'));
