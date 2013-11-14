<?php
namespace CJL\espn;

use Symfony\Component\Yaml\Parser;


/**
 *  ESPN API Configuration Object.
 */
class Config {
  // API Key
  protected $key = array();
  protected $secret;

  /**
   *
   */
  public function __construct(Array $config) {
    $this->setKey($config['apikey']);
    $this->setSecret($config['secret']);
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setKey($key)
  {
    $this->key = $key;
  }

  public function getSecret()
  {
    return $this->Secret;
  }

  public function setSecret($secret)
  {
    $this->secret = $secret;
  }

}
