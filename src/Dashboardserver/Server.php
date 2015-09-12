<?php

namespace Dashboardserver;

class Server
{
    private $conf;
    private $server;
    private $account;

    public function getLocaleFolder()
    {
    }
    public function start()
    {
        echo '<pre>';
        print_r($this->conf);
        print_r($this->server);
    }
    public function __construct($config, $server)
    {
        $this->setConfig($config);
        $this->setServerVars($server);
    }
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

        // based on request set account
        //         $this->setAccount($account);
    }
}
