<?php
namespace CJL\espn;

/**
 *  ESPN API Configuration Object.
 */
public class Config {
  // API Key
  protected $key;

  public function __construct($key) {
    $this->set($key);
  }

  public function get()
  {
    return $this->key;
  }

  public function set($key)
  {
    $this->key = $key;
  }

}
