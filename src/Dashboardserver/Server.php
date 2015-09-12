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

    public function pageExists()
    {
    }
    public function showPage()
    {
    }

    public function init()
    {
        var_dump($this->config);
        var_dump($this->server);
        var_dump($this->account);
    }
    public function __construct($config, $server)
    {
        $this->setConfig($config);
        $this->setServerEnv($server);
    }
    private function setAccount($account)
    {
        $accountObj = new Account($account);
        $accountObj->setAccountBasePath($this->config->getAccountPath());
        $this->account = $accountObj;
    }

    private function setConfig($config)
    {
        $this->config = $config;
    }
    private function setServerEnv($server)
    {
        $this->server = $this->config->getServerStrategy()->setServerEnv($server)->setServerObject(new Server\ServerEnv())->getCleanServerEnv();
        $this->config->setRequestDomain($this->server->getHost());
        $account = $this->config->getAccount();
        if ($account) {
            $this->setAccount($account);
        } else {
            echo 'No account for this request..';

            return;
        }

        if ($this->config->getDebug()) {
            $this->init();
        }
    }
}
