<?php

namespace Dashboardserver;

class AccountData
{
    private $base;
    private $blocks = '/blocks';
    private $sites = '/sites';
    private $themes = '/themes';
    private $jsonPages = '/data/pages.json';
    private $url;
    public function getPage()
    {
        $strJson = file_get_contents($this->getJsonPages());
        $pages = json_decode($strJson, true);
        foreach ($pages as $page) {
            print_r($page);
            if ($this->server['REQUEST_URI'] == $page['url']) {
                return $page;
            }
        }
    }
    public function setServerVars($server)
    {
        $this->server = $server;
    }
    // $path no trailing slash
    public function __construct($path)
    {
        $this->base = $path;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function getBlocks()
    {
        return  $this->base.$this->blocks;
    }
    public function getSites()
    {
        return $this->base.$this->sites;
    }

    public function getThemes()
    {
        return $this->base.$this->themes;
    }
    public function getJsonPages()
    {
        return $this->base.$this->jsonPages;
    }
    public function getUrl()
    {
        return $this->url;
    }
}
