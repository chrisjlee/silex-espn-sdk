<?php
namespace CJL\espn;

use CJL\espn\config as Config;
use CJL\espn\requestInterface as RequestInterface;

class Espn implements RequestInterface {
  protected $config;

  public function __construct(Config $config)
  {
    $this->config = $config;
    $this->config->getKey();
  }
  public function getParameters(Array $parameters) {
  }
  public function setParameters(Array $parameters) {

  }
}
