<?php

namespace Dashboardserver\Locale\Strategies;

class DomainFolder extends AbstractStrategy
{
    private $tld;
    protected $host;

    public function setHost($host)
    {
        $this->host = $host;
    }

    private function process()
    {
        $host = parse_url('http://'.$this->host);
        preg_match('/(.*?)((\.co)?.[a-z]{2,4})$/i', $host['host'], $m);
        $this->tld = isset($m[2]) ? $m[2] : 'null';
      // get tld for country
      // get first folder for language

      $url = $this->server->getUrl();
    }

    public function getFolder()
    {
        $this->process();

        return $this->host.'_'.$this->tld.'-null';
    }
}
