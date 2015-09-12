<?php

namespace Dashboardserver;

class Server
{
    private $conf;
    private $server;
    private $account;

    private function setAccount($account)
    {
        $this->account = $account;
    }

    private function setConfig($config)
    {
        $this->conf = $config;
    }
    private function setServerVars($server)
    {
        $this->server = $server;
    }
    public function start()
    {
        echo '<pre>';
        print_r($this->conf);
        print_r($this->server);
    }
    public function __construct($config, $account, $server)
    {
        $this->setConfig($config);
        $this->setAccount($account);
        $this->setServerVars($server);
    }
}
