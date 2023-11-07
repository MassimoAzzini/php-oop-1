<?php 

class Production{

  public $title;
  public $genre;
  public $cast;
  public $poster;

  public function __construct(string $_title, array $_genre, array $_cast, Poster $_image=null ) {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->cast = $_cast;
    $this->poster = $_image;
  }

  public function setImage(Poster $_image) {
    $this->poster = $_image;
  }
}

?>