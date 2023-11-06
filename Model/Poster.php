<?php

class Poster{
  public $poster_file;
  public $poster_name;

  public function __construct(string $_poster_file, string $_poster_name) {
    $this->poster_file = $_poster_file;
    $this->poster_name = $_poster_name;
  }
  
}

?>