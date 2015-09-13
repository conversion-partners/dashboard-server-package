<?php

namespace Dashboardserver;

class Server
{
    private $config;
    private $server;
    private $account;

    private function getLocaleFolder()
    {
        $locale = $this->config->getLocaleStrategy();
        $host = $this->config->getHost();
        $locale->setHost($host);
        $locale->setServerEnv($this->server);

        $folder = $locale->getFolder();

        return $folder;
    }

    private function getPageFolder()
    {
        return $this->account->getPageFolder();
    }

    private function getVersionFolder()
    {
    }

    private function getPagePath()
    {
        $path = $this->account->getSites().'/'.$this->getLocaleFolder().$this->getPageFolder().$this->getVersionFolder().'index.html';

        echo 'Page path : '.$path;

        return $path;
    }

    public function pageExists()
    {
        return file_exists($this->getPagePath());
    }
    public function showPage()
    {
        $page = file_get_contents($this->getPagePath());
    }

    public function showEnv()
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
        $accountObj->setServerEnv($this->server);
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
            //$this->showEnv();
        }
    }
}
