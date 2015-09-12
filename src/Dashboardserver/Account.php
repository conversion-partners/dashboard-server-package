<?php

namespace Dashboardserver;

class Account
{
    private $base;
    private $blocks = '/blocks';
    private $sites = '/sites';
    private $themes = '/themes';
    private $jsonPages = '/data/pages.json';
    private $url;
    private $country;
    private $language;
    private $account;

    public function setAccount($account)
    {
        $this->account = $account;
    }

    private function getCompletePage()
    {
        //FIXME for small site this is ok big site ??? performance issues
        $strJson = file_get_contents($this->getJsonPages());
        $pages = json_decode($strJson, true);
        foreach ($pages as $page) {
            if ($this->server['REQUEST_URI'] == $page['url']) {
                return $page; // yup just the first page
            }
        }

        return false;
    }
    private function getCorrectVersion($page)
    {
        return $page;
    }
    public function getPage()
    {
        $page = $this->getCompletePage();
        if (!$page) {
            return $page;
        }
        $version = $this->getCorrectVersion($page);

        return $version;
    }
    public function getSite()
    {
        return '/easydrain.nl_null-null';
    }
    public function getPageDir()
    {
        $site = $this->getSite();
    }
    public function setServerVars($server)
    {
        $this->server = $server;
    }

    public function __construct($path)
    {
        // $path no trailing slash if trailing path then remove
        // check if file exists
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
        return $this->getSites().$this->jsonPages;
    }
    public function getLanguage()
    {
    }
    public function getCountry()
    {
    }
    public function getUrl()
    {
        return $this->url;
    }
}
