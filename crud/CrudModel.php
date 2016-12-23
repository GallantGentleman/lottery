<?php

class CrudModel {

  private $secret_key = 'luna';
  private $url = 'http://gallant.zzz.com.ua/';

  public function __construct() {
    $this->url .= '?token='.$this->secret_key;
  }

  public function getItems() {
    $url = $this->url."&action=read";

    return $this->_content($url);
  }

  private function _content($url) {
    $content = file_get_contents($url);

    return json_decode($content, true);
  }
}
