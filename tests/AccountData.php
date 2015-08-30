<?php


class AccountData
{
    private $base;
    private $blocks = $base . 'blocks';
    private $sites = $base . 'sites';
    private $themes = $base . 'themes';
    private $jsonPages = $sites . '/data/pages.json';
    private $url;
    public function getPage(){
      $strJson = file_get_contents($jsonPages);
      $pages = json_decode($strJson, true);
      foreach($pages as $page) {
        print_r($page);
          if($this->server['REQUEST_URI'] == $page['url']){
            return $page;
          }
      }
    }
    public function setServerVars($server){
      $this->server = $server;
    }
    public function __construct($path)
    {
        $this->base = $path;
    }



}
