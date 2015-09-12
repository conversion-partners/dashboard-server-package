<?php

namespace Dashboardserver;

class Server
{
    private $config;
    private $server;
    private $account;

    public function getLocaleFolder()
    {
    }
    public function init()
    {
        var_dump($this->config);
        var_dump($this->server);
    }
    public function __construct($config, $server)
    {
        $this->setConfig($config);
        $this->setServerEnv($server);
    }
    private function setAccount($account)
    {
        $this->account = $account;
    }

    private function setConfig($config)
    {
        $this->config = $config;
    }
    private function setServerEnv($server)
    {
        $this->server = $this->config->getServerStrategy()->setServerEnv($server)->setServerObject(new Server\ServerEnv())->getCleanServerEnv();

        // based on request set account
        //         $this->setAccount($account);
    }
}
