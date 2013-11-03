<?php
namespace CJL\espn;

use CJL\espn\config as Config;

/**
 * ESPN Request Interface
 */
interface RequestInterface {
  public function getParameters(Array $parameters);
  public function setParameters(Array $parameters);
}
