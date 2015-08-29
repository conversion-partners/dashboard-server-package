<?php

namespace Dashboardserver;

class Server
{
    private $conf;
    private $server;
    public function setConfig($config)
    {
        $this->conf = $config;
    }
    public function setServerVars($server)
    {
        $this->server = $server;
    }
    public function start()
    {
        echo '<pre>';
        print_r($this->conf);
        print_r($this->server);
    }
    public function __construct()
    {
    }
}
